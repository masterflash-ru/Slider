<?php
namespace Mf\Slider;

use Admin\Service\JqGrid\ColModelHelper;
use Admin\Service\JqGrid\NavGridHelper;
use Zend\Json\Expr;

return [
        /*jqgrid - сетка*/
        "type" => "ijqgrid",
        "description"=>"Слайдеры",
        "options" => [
            "container" => "slider",
            "caption" => "",
            "podval" => "",
            
            
            /*все что касается чтения в таблицу*/
            "read"=>[
                "db"=>[//плагин выборки из базы
                    "sql"=>"select id as img, slider.* from slider",
                    "PrimaryKey"=>"id",
                ],
            ],
            /*редактирование*/
            "edit"=>[
                "cache" =>[
                    "tags"=>["slider"],
                    "keys"=>["slider"],
                ],
                "db"=>[ 
                    "sql"=>"select * from slider",
                    "PrimaryKey"=>"id",
                ],
            ],
            "add"=>[
                "db"=>[ 
                    "sql"=>"select * from slider",
                    "PrimaryKey"=>"id",
                ],
            ],
            //удаление записи
            "del"=>[
                "cache" =>[
                    "tags"=>["slider"],
                    "keys"=>["slider"],
                ],
                "db"=>[ 
                    "sql"=>"select * from slider",
                    "PrimaryKey"=>"id",
                ],
            ],
            /*внешний вид*/
            "layout"=>[
                "caption" => "Слайдеры",
                "height" => "auto",
                "width" => "auto",
                "rowNum" => 10,
                "rowList" => [20,50,100],
                "sortname" => "poz",
                "sortorder" => "desc",
                "viewrecords" => true,
                "autoencode" => false,
                "hidegrid" => false,
                "toppager" => true,
                
                /*дает доп строку в конце сетки, из данных туда можно ставить итоги какие-либо*/
                //"footerrow"=> true, 
                //"userDataOnFooter"=> true,
               
                // "multiselect" => true,
                //"onSelectRow"=> new Expr("editRow"), //клик на строке вызов строчного редактора
        
                
                "rownumbers" => false,
                "navgrid" => [
                    "button" => NavGridHelper::Button(["search"=>false]),
                    "editOptions"=>NavGridHelper::editOptions(["closeAfterEdit"=>true]),
                    "addOptions"=>NavGridHelper::addOptions(),
                    "delOptions"=>NavGridHelper::delOptions(),
                ],
                "colModel" => [
                    ColModelHelper::text("name",["label"=>"Имя слайда"]),
                    ColModelHelper::text("poz",["label"=>"Порядок"]),
                    ColModelHelper::select("category",
                                        ["label"=>"Раздел",
                                         "width"=>75,
                                         "editable"=>true,
                                         "editoptions"=>[
                                         ],
                                         "plugins"=>[
                                             "colModel"=>[//плагин срабатывает при генерации сетки, вызывается в помощнике сетки
                                                 "GetCategory"=>[]
                                             ]
                                         ]
                                        ]),

                    ColModelHelper::select("locale",
                                        ["label"=>"Язык",
                                         "editable"=>true,
                                         "width"=>40,
                                         "plugins"=>[
                                             "colModel"=>[//плагин срабатывает при генерации сетки, вызывается в помощнике сетки
                                                 "Locale"=>[]
                                             ]
                                         ]
                                        ]),

                    ColModelHelper::text("link",[
                        "width"=>400,
                        "label"=>"локальный URL автомат",
                        "hidden"=>true,
                        "editrules"=>[
                            "edithidden"=>true,
                        ],
                        "plugins"=>[
                            "edit"=>[
                                "translit"=>[
                                    "source"=>"name"
                                ],
                            ],
                            "edit"=>[
                                "translit"=>[
                                    "source"=>"name"
                                ],
                            ],
                            "add"=>[
                                "translit"=>[
                                    "source"=>"name"
                                ],
                            ],
                        ],
                       "editoptions" => ["size"=>120 ],
                    ]),
                    ColModelHelper::text("url",[
                        "width"=>400,
                        "label"=>"Внешний переход",
                        "hidden"=>true,
                        "editrules"=>[
                            "edithidden"=>true,
                        ],
                       "editoptions" => ["size"=>120 ],
                    ]),

                    ColModelHelper::ckeditor("info",[
                        "label"=>"Статья полностью",
                        "plugins"=>[
                            "edit"=>[
                                "ClearContent"=>[],
                            ],
                            "add"=>[
                                "ClearContent"=>[],
                            ],
                        ],
                    ]),
                    ColModelHelper::image("img",
                                          ["label"=>"Фото",
                                           "plugins"=>[
                                               "read"=>[
                                                   "slideimage" =>[
                                                       "image_id"=>"id",                        //имя поля с ID
                                                       "storage_item_rule_name"=>"admin_img"   //имя правила из хранилища
                                                   ],
                                               ],
                                               "edit"=>[
                                                   "slideimage" =>[
                                                       "image_id"=>"id",                        //имя поля с ID
                                                   ],
                                               ],
                                               "del"=>[
                                                   "slideimage" =>[
                                                       "image_id"=>"id",                        //имя поля с ID
                                                   ],
                                               ],
                                               "add"=>[
                                                   "slideimage" =>[
                                                       "image_id"=>"id",                        //имя поля с ID
                                                       "database_table_name"=>"slider"
                                                   ],
                                               ],
                                           ],
                                          ]),
                    ColModelHelper::text("alt",["label"=>"ALT подпись","hidden"=>true,"editoptions" => ["size"=>120 ],"editrules"=>["edithidden"=>true]]),
                    ColModelHelper::text("caption1",[
                        "width"=>400,
                        "label"=>"Надпись на слайде 1",
                        "hidden"=>true,
                        "editrules"=>[
                            "edithidden"=>true,
                        ],
                       "editoptions" => ["size"=>120 ],
                    ]),
                    ColModelHelper::text("caption2",[
                        "width"=>400,
                        "label"=>"Надпись на слайде 2",
                        "hidden"=>true,
                        "editrules"=>[
                            "edithidden"=>true,
                        ],
                       "editoptions" => ["size"=>120 ],
                    ]),
                    ColModelHelper::text("caption3",[
                        "width"=>400,
                        "label"=>"Надпись на слайде 3",
                        "hidden"=>true,
                        "editrules"=>[
                            "edithidden"=>true,
                        ],
                       "editoptions" => ["size"=>120 ],
                    ]),

                    ColModelHelper::textarea("title",["label"=>"TITLE","hidden"=>true,"editrules"=>["edithidden"=>true]]),
                    ColModelHelper::textarea("keywords",["label"=>"KEYWORDS","hidden"=>true,"editrules"=>["edithidden"=>true]]),
                    ColModelHelper::textarea("description",["label"=>"DESCRIPTION","hidden"=>true,"editrules"=>["edithidden"=>true]]),
                    ColModelHelper::checkbox("public",[
                        "width"=>50,
                        "label"=>"Публик.",
                    ]),

                ColModelHelper::cellActions(),
                ],
            ],
        ],
];