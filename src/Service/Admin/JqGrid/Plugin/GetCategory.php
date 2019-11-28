<?php


namespace Mf\Slider\Service\Admin\JqGrid\Plugin;

use Admin\Service\JqGrid\Plugin\AbstractPlugin;


class GetCategory extends AbstractPlugin
{

    protected $config;
    
    public function __construct($config)
    {
        $this->config=$config;
    }
    
    /**
    * преобразование элементов colModel, например, для генерации списков
    * $colModel - элемент $colModel из конфигурации
    * возвращает тот же $colModel, с внесенными изменениями
    */
    public function colModel(array $colModel, array $toolbarData=[])
    {

        $config=$this->config['slider'];
        $rez=[];
        if (is_array($config)){
            foreach ($config as $category=>$v){
                $rez[$category]=$v["name"];
            }
        }
        $colModel["editoptions"]["value"]=$rez;
        
        return $colModel;
    }



}