<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/grav-admin/user/config/plugins/email.yaml',
    'modified' => 1752692573,
    'size' => 557,
    'data' => [
        'enabled' => true,
        'from' => 'noreply@expo-land.ru',
        'from_name' => 'Expo Land',
        'to' => 'info@expo-land.ru',
        'to_name' => 'Expo Land',
        'subject' => 'Новое сообщение с сайта',
        'body' => '{% include "forms/data.html.twig" %}',
        'process_markdown' => true,
        'twig' => true,
        'debug' => false,
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'charset' => 'utf-8'
    ]
];
