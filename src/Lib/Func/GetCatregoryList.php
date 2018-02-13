<?php
namespace Mf\Slider\Lib\Func;
use Exception;

class GetCatregoryList
{


public function __invoke($obj,$infa,$struct_arr,$pole_type,$pole_dop,$tab_name,$idname,$const,$id,$action)
{
	//выводит список разделов ленты из константы конфигурации
	
	if (!isset($obj->config['slider']) || !is_array($obj->config['slider']))
		{
			throw new Exception("Секция конфига 'slider' не найдена или она не верного формата");
		}
	
	$l=$obj->config['slider'];// секция конфига                
	
	$obj->dop_sql['name']=[];
	$obj->dop_sql['id']=[];
	foreach ($l as $id=>$item)
		{
			$obj->dop_sql['name'][]=$item['description'];
			$obj->dop_sql['id'][]=$id;
		}
	//это значение по умолчанию
	if  (!$obj->pole_dop[0]) 
		{
			$obj->pole_dop[0]=$obj->dop_sql['id'][0];
			$obj->pole_dop0=$obj->pole_dop[0];
		}
	return $infa;
}
}