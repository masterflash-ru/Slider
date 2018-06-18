<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mf\Slider\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Mf\Slider\Entity\Slider;
use ADO\Service\RecordSet;
use ADO\Service\Command;



class IndexController extends AbstractActionController
{
	protected $cache;
    protected $connection;
    protected $config;


public function __construct ($connection,$cache, $config)
	{
		$this->cache=$cache;
        $this->config=$config;
        $this->connection=$connection;
	}



public function indexAction()
{
    	//try{
        $url=$this->params('link',null);
    $view=new ViewModel();
		//создаем ключ кеша
		$key="slider_".preg_replace('/[^0-9a-zA-Z_\-]/iu', '',$url);
        //пытаемся считать из кеша
        $result = false;
        $slider= $this->cache->getItem($key, $result);
        if (!$result || true){
            //промах кеша, создаем
			$c=new Command();
			$c->NamedParameters=true;
			$c->ActiveConnection=$this->connection;
			$p=$c->CreateParameter('url', adChar, adParamInput, 50, $url);//генерируем объек параметров
			$c->Parameters->Append($p);//добавим в коллекцию
			$c->CommandText="select * from slider where  link=:url";
			$rs=new RecordSet();
			$rs->CursorType =adOpenKeyset;
			$rs->Open($c);
            if ($rs->EOF) {throw new  \Exception("Запись в не найдена");}
			$slider=$rs->FetchEntity(Slider::class);
            
            //сохраним в кеш
            $this->cache->setItem($key, $slider);
			$this->cache->setTags($key,["slider"]);
        }
    
    //вычислим шаблон вывода
    $tpl=$this->config[$slider->getCategory()];
    $view->setTemplate($tpl["detal_tpl"]);

    $view->setVariables(["slider"=>$slider]);
    return $view;

	//}
	//catch (\Exception $e) {
        //любое исключение - 404
   //     $this->getResponse()->setStatusCode(404);
   // }

}


}

