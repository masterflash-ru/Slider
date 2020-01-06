<?php
/**
*
 */

namespace Mf\Slider;
use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\Cache\Storage\Plugin\Serializer;
use Laminas\Cache\Storage\Adapter\Filesystem;


return [
    'router' => [
        'routes' => [
        'adslider' => [
             'type' => Segment::class,
             'options' => [
                  'route'    => '/adslider/:link',
                  'constraints' => [
                        'link' => '[a-zA-Z0-9_\-]+',
                  ],
                 'defaults' => [
                     'controller' => Controller\IndexController::class,
                     'action'     => 'index',
                 ],
            ],
        ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => Controller\Factory\IndexControllerFactory::class,
        ],
    ],

    "slider"=>[],

    'view_helpers' => [
        'factories' => [
            View\Helper\Slider::class => View\Helper\Factory\Slider::class,
        ],
        'aliases' => [
            'Slider' => View\Helper\Slider::class,
            'slider' => View\Helper\Slider::class,
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
/*описатели интерфейсов*/
    "interface"=>[
        "slider"=>__DIR__."/admin.slider.php",
    ],
    /*плагины для сетки JqGrid*/
    "JqGridPlugin"=>[
        'factories' => [
            Service\Admin\JqGrid\Plugin\Images::class=>Service\Admin\JqGrid\Plugin\FactoryImages::class,
            Service\Admin\JqGrid\Plugin\GetCategory::class=>Service\Admin\JqGrid\Plugin\FactoryGetCategory::class,
        ],
        'aliases' =>[
            "slideimage"=>Service\Admin\JqGrid\Plugin\Images::class,
            "SliderGetCategory" => Service\Admin\JqGrid\Plugin\GetCategory::class,
        ],
    ],
];
