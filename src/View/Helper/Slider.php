<?php
/*
помощник view для вывода слайдеролв
*/

namespace Mf\Slider\View\Helper;

use Zend\View\Helper\AbstractHelper;
use ADO\Service\RecordSet;
use Exception;
use Zend\Stdlib\ArrayUtils;
use Zend\Mvc\MvcEvent;

class Slider extends AbstractHelper 
{
	protected $connection;
    protected $config;
	protected $cache;
    protected $MvcEvent;
	protected $rs;
	protected $_default=[
        "locale"=>"ru_RU",              //имя локали
        "limit_items"=>0,               //ограничение кол-во слайдов, 0- нет ограничений
        'tpl' => null,                  //сценарий вывода
        "indicators"=>true,             //индикаторы да/нет
        "control" => true,              //кнопки листания по бокам да/нет
        "show_routes" =>[               //массив имен маршрутов для которых выводим, пусто - для всех
            ],
        "hide_routes" =>[               //массив маршрутов для которых скрываем, пусто - нет запретов
            ],
    ];

/*
*$options - массив опций (см. выше дефолтные объявления), 
* 
*/
public function __invoke(string $sysname,array $options=[])
{
    
    
    if (empty($this->config[$sysname]["options"]["tpl"])) {
        throw new Exception("Конфигурация $sysname не найдена");
    }
    //сливаем дефолтнфе опции и из конфига
    $options1=ArrayUtils::merge($this->_default,$this->config[$sysname]["options"]);
    //сливаем опции переданные сюда напрямую
    $options=ArrayUtils::merge($options1,$options);
    
    /*если марштура не существует, будет пусто, значит выходим*/
    $route=$this->MvcEvent->getRouteMatch();
    if (empty($route)){
        return "";
    }
    $route_name=$route->getMatchedRouteName();
    if (
        !empty($options["show_routes"]) && !in_array($route_name,$options["show_routes"]) /*проверяем для каких маршрутов выводить слайдер*/
        || 
        !empty($options["hide_routes"]) && in_array($route_name,$options["hide_routes"]) /*проверяем для каких маршрутов НЕ выводить слайдер*/
        ) { return "";}

	$result = false;
	$key="Slider_".preg_replace('/[^0-9a-zA-Z_\-]/iu', '',$sysname)."_".md5(serialize($options));

    $slider = $this->cache->getItem($key, $result);
    
    if (!$result){
                $limit="";
                if (!empty($options["limit_items"])) {
                    $limit=" limit ".(int)$options["limit_items"];
                }
                $rs=new RecordSet();
                $rs->open("select * from slider where public>0 and category='{$sysname}' and locale='{$options["locale"]}' {$limit} order by poz desc",$this->connection);
                $slider=$rs->FetchEntityAll();

                $options["category"]=$sysname;
                $view=$this->getView();

                $slider=$view->partial($options["tpl"],["entity"=>$slider,"options"=>$options]);

        $this->cache->setItem($key, $slider);
        $this->cache->setTags($key,["slider"]);

    }
    return $slider;
}



public function __construct ($connection,$cache,$config, MvcEvent $MvcEvent)
{
    $this->connection=$connection;
    $this->cache=$cache;
    $this->config=$config;
    $this->MvcEvent=$MvcEvent;
}




}
