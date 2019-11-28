<?php
namespace Mf\Slider\Service\Admin\JqGrid\Plugin;

/*
*/
use Admin\Service\JqGrid\Plugin\Images as AImages;

class Images extends AImages
{
    protected $def_options =[
        "image_id"=>"id",                        //имя поля с ID
        "storage_item_name" => "",              //имя секции в хранилище
        "storage_item_rule_name"=>"admin_img",  //имя правила из хранилища
        "database_table_name" =>"slider",       //имя таблицы в которую добавляем записи, если напрямую в базу
    ];


/**
* операция чтения
* возвращает строку пути к файлу+файл пригодную для тега IMG
*/
public function read($value,$index,$row)
{
    return $this->ImagesLib->loadImage($row["category"],$row[$this->options["image_id"]],$this->options["storage_item_rule_name"]);
}

/**
* добвление новой записи, ID еще нет, выисляется следующий и под ним записывается в хранилище
*/
public function add($value,&$postParameters)
{
    $this->options["storage_item_name"]=$postParameters["category"];
    return parent::add($value,$postParameters);
}

/**
* повторяет админский плагин, только подменивает имя хранилища
*/
public function edit($value,&$postParameters)
{
    //читаем категорию существующей записи, если она сменилась, нужно перенести в хранилище
    $id=(int)$postParameters["id"];
    $rs=$this->connection->Execute("select category from slider where id={$id}");
    if ($rs->Fields->Item["category"]->Value!=$postParameters["category"] && !$rs->EOF){
        //переносим
        $this->ImagesLib->renameImages($rs->Fields->Item["category"]->Value,$postParameters["category"],$id);
    }
    $this->options["storage_item_name"]=$postParameters["category"];
    return parent::edit($value,$postParameters);
}

/*
* подменяет админский плагин, только меняет имя хранилища
*/
public function del(array $postParameters)
{
    //читаем что бы определить категорию
    $id=(int)$postParameters["id"];
    $rs=$this->connection->Execute("select category from slider where id={$id}");
    $this->options["storage_item_name"]=$rs->Fields->Item["category"]->Value;
    return parent::del($postParameters);

}
}