<?php
/*
помощник view для вывода слайдеролв
*/

namespace Mf\Slider\View\Helper;

use Zend\View\Helper\AbstractHelper;
use ADO\Service\RecordSet;
use Zend\Navigation\Service\ConstructedNavigationFactory;
use Mf\Slider\Entity\Slider as SliderItems;
use Exception;

class Slider extends AbstractHelper 
{
	protected $connection;
	protected $cache;
	protected $rs;
	protected $container;
	protected $_default=[
		"locale"=>"ru_RU",              //имя локали
		"limit_items"=>0,               //ограничение кол-во слайдов, 0- нет ограничений
        "id" => null,                   //идентификатор
        'tpl' => null,                  //сценарий вывода
	];

/*
*$options - массив опций (см. выше дефолтные объявления), 
* 
*/
public function __invoke($sysname,array $options=[])
{
    if (empty($options["tpl"])) {throw new Exception("Опция tpl в которой передается сценарий вывода не указана");}
    
	$options=array_replace_recursive($this->_default,$options);
	$result = false;
	$key="Slider_".preg_replace('/[^0-9a-zA-Z_\-]/iu', '',$sysname)."_{$options["locale"]}";

    $slider = $this->cache->getItem($key, $result);
    
    if (!$result || true){
        $limit="";
        if (!empty($options["limit_items"])) {
            $limit=" limit ".(int)$options["limit_items"];
        }
    $rs=new RecordSet();
	$rs->MaxRecords=0; 
	$rs->CursorType = adOpenKeyset;
	$rs->open("select * from slider where category='{$sysname}' and locale='{$options["locale"]}' {$limit} order by poz desc",$this->connection);
    
    $slider=$rs->FetchEntityAll(SliderItems::class);		

	$this->cache->setItem($key, $slider);
	$this->cache->setTags($key,["slider"]);
	}
	
    $view=$this->getView();
    $options["category"]=$sysname;
    return $view->partial($options["tpl"],["entity"=>$slider,"options"=>$options]);

}



public function __construct ($connection,$cache,$container)
	{
		$this->connection=$connection;
		$this->cache=$cache;
		$this->container=$container;
	}




}
