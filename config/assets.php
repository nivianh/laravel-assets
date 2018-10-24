<?php

/**
 * Created by Sublime Text 3.
 * User: Sang Nguyen
 * Date: 22/07/2015
 * Time: 8:11 PM
 */

return [
    'offline' => env('ASSETS_OFFLINE', true),
    'enable_version' => env('ASSETS_ENABLE_VERSION', true),
    'version' => env('ASSETS_VERSION', time()),
    'javascript' => [
        'modernizr',
        'app',
    ],
    'stylesheets' => [
        'bootstrap',
    ],
    'resources' => [
        'javascript' => [
            'app' => [
                'use_cdn' => false,
                'location' => 'bottom',
                'src' => [
                    'local' => '/js/app.js',
                ],
            ],
            'modernizr' => [
                'use_cdn' => true,
                'location' => 'top',
                'src' => [
                    'local' => '/vendor/core/packages/modernizr/modernizr.min.js',
                    'cdn' => '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js',
                ],
            ],
        ],
        'stylesheets' => [
            'bootstrap' => [
                'use_cdn' => true,
                'location' => 'top',
                'src' => [
                    'local' => '/packages/bootstrap/css/bootstrap.min.css',
                    'cdn' => '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css',
                ],
                'attributes' => [
                    'integrity' => 'sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB',
                    'crossorigin' => 'anonymous',
                ],
            ],
        ],
    ],
];
