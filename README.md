# Разные слайдеры

сильно сырое, все в разработке, принцип прост - генерация HTML через помощник view списка элментов в формате принятом для того или иного слайдера



конфиг приложения:

```php

    'slider' =>[/*слайдер*/
        'slider_podval' => [
            "description"=>"Слайдер в подвал",
        ],
    ],
    
```
добавить в секцию 

```php
"storage"=>[
...
    "items"=>[

            "slider_podval"=>[
                "description"=>"Лого в слайдер подвала (без обработки!)",
                'file_storage'=>'default',
                'file_rules'=>[
                            'admin_img'=>[
                                'filters'=>[
                                        CopyToStorage::class => [
                                                    'folder_level'=>0,
                                                    'folder_name_size'=>3,
                                                    'strategy_new_name'=>'md5'
                                        ],

                                ],
                            ],
                            'img'=>[
                                'filters'=>[
                                        CopyToStorage::class => [
                                                    'folder_level'=>0,
                                                    'folder_name_size'=>3,
                                                    'strategy_new_name'=>'md5'
                                        ],
                                        ImgResize::class=>[
                                                    "method"=>1,
                                                    "width"=>160,
                                                    "height"=>76,
                                                    'adapter'=>'gd',
                                        ],
                                ],
                            ],
                ],
            ],//slider_podval
    ] 
]
```
