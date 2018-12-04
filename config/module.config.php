<?php
/**
*
 */

namespace Mf\Slider;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;


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
    // Настройка кэша.
    'caches' => [
        'DefaultSystemCache' => [
            'adapter' => [
                'name'    => Filesystem::class,
                'options' => [
                    'cache_dir' => './data/cache',
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

];
