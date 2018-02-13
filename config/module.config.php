<?php
/**
*
 */

namespace Mf\Slider;


return [
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
];
