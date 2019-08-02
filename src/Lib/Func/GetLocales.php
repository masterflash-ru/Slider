<?php
namespace Mf\Slider\Lib\Func;

class GetLocales
{


public function __invoke($obj,$infa,$struct_arr,$pole_type,$pole_dop,$tab_name,$idname,$const,$id,$action)
{
	//выводит список локалей сайта из константы конфигурации

	if (!empty($obj->config["locale_enable_list"])){
        $l=$obj->config["locale_enable_list"];// массив допустимых локалей
    } else {
        $l=[$obj->config["locale_default"]];
    }
		//подменить список
		$obj->dop_sql['name']=$l;
		$obj->dop_sql['id']=$l;
		//это значение по умолчанию 
	if  (!$obj->pole_dop[1]) 
		{
			$obj->pole_dop[1]=$obj->dop_sql['id'][0];
			$obj->pole_dop1=$obj->pole_dop[1];
			}
	return $infa;
}
}