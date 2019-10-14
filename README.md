# Разные слайдеры

сильно сырое, все в разработке, принцип прост - генерация HTML через помощник view списка элментов в формате принятом для того или иного слайдера

Установка composer require masterflash-ru/slider
После установки загрузите дамп в базу приложения из папки data
добавьте в конфиг вашего приложения (ключ - имя слайдера) подобную конфигурацию:

```php

    "slider"=>[
        "layout_up"=>[
            "name"=>"Слайдер в шапке",
            "options"=>[
                /*сценарий вывода*/
                "tpl"=>"mf/slider/bootstrap4",  //Обязательный параметр
                
                "indicators"=>true,             //индикаторы да/нет
                "control" => true,              //кнопки листания по бокам да/нет
                "show_routes" =>[               //массив имен маршрутов для которых выводим, пусто - для всех
                ],
                "hide_routes" =>[               //массив маршрутов для которых скрываем, пусто - нет запретов
                ],
            ],
        ],
    ],
    
```
добавить в секцию storage

```php
"storage"=>[
...
    "items"=>[

            "layout_up"=>[
                "description"=>"Элементы слайдера",
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
            ],
    ] 
]
```
Предлагается помощник вывода Slider, вызывается из сценариев вывода вашего приложения:
```php
//echo $this->slider("имя_слайдера",[массив опций]);
//пример для bootstrap4:

echo $this->slider("layout_up",["container-carousel-css"=>"carousel slide carousel-fade"]);
```
массив параметров включает то что указано в конфиге и перезаписывает их, либо доаолнительные, специфичные для данного слайдера, например "container-carousel-css" - 
это строка стиля в контейнер карусели. Опции передаются в сценарий вывода как есть.

После изменения настроек обязательно чистите кеш! в кеше хранится уже отрендерированная карусель в виде HTML.

На слайды можно накладывать ссылки для перехода, переходить можно указав адрес перехода, либо на внутреннюю страницу, внутренние страницы работают аналогично статичным.
алгоритм обработки ссылок:
- если есть адрес перехода - ставим его и выходим из обработки
- если адрес перехода пуст, смотрим внутренний адрес, если он есть, ставим его
- если ни того, ни другого ссылка не ставится, получается просто картинки слайды.

Пакет предлагает внутренние страницы по адресам типа /adslider/:link, link - внутренний адрес указаный в админке.


Для работы с базой в конфиге приложения должно быть объявлено DefaultSystemDb:
```php
......
    "databases"=>[
        //соединение с базой + имя драйвера
        'DefaultSystemDb' => [
            'driver'=>'MysqlPdo',
            //"unix_socket"=>"/tmp/mysql.sock",
            "host"=>"localhost",
            'login'=>"root",
            "password"=>"**********",
            "database"=>"simba4",
            "locale"=>"ru_RU",
            "character"=>"utf8"
        ],
    ],
.....
```
для работы с кешем аналогично:
```php
.....
    'caches' => [
        'DefaultSystemCache' => [
            'adapter' => [
                'name'    => Filesystem::class,
                'options' => [
                    // Store cached data in this directory.
                    'cache_dir' => './data/cache',
                    // Store cached data for 3 hour.
                    'ttl' => 60*60*2 
                ],
            ],
            'plugins' => [
                [
                    'name' => Serializer::class,
                    'options' => [
                    ],
                ],
            ],
        ],
    ],
.....
```

