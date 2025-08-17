<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/grav-admin/user/config/system.yaml',
    'modified' => 1755450979,
    'size' => 1133,
    'data' => [
        'absolute_urls' => false,
        'languages' => [
            'supported' => [
                0 => 'ru',
                1 => 'en'
            ],
            'default_lang' => 'ru',
            'include_default_lang' => false
        ],
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'quark',
            'markdown' => [
                'extra' => false
            ],
            'process' => [
                'markdown' => true,
                'twig' => false
            ]
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => true
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_module_pipeline' => false,
            'js_minify' => true
        ],
        'errors' => [
            'display' => true,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ],
        'gpm' => [
            'verify_peer' => true
        ],
        'strict_mode' => [
            'blueprint_compat' => true
        ],
        'media' => [
            'enable_media_timestamp' => false,
            'auto_metadata_exif' => false
        ],
        'images' => [
            'default_image_quality' => 85,
            'cache_all' => false,
            'auto_fix_orientation' => true,
            'seofriendly' => false
        ],
        'forms' => [
            'files' => [
                'multiple' => true,
                'limit' => 10,
                'filesize' => 8,
                'accept' => [
                    0 => 'image/*'
                ],
                'avoid_overwriting' => false,
                'random_name' => true
            ]
        ]
    ]
];
