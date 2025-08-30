<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/grav-admin/user/config/plugins/email.yaml',
    'modified' => 1756569657,
    'size' => 634,
    'data' => [
        'enabled' => true,
        'from' => 'diablo2545@yandex.ru',
        'from_name' => 'Expo Land',
        'to' => 'krendel160575@gmail.com',
        'to_name' => 'Expo Land',
        'subject' => 'Новое сообщение с сайта',
        'body' => '{% include "forms/data.html.twig" %}',
        'process_markdown' => true,
        'twig' => true,
        'debug' => false,
        'queue' => [
            'enabled' => true,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.yandex.ru',
                'port' => 465,
                'encryption' => 'tls',
                'user' => 'diablo2545@yandex.ru',
                'password' => 'foqmuuzjvcejnykd'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -t'
            ]
        ],
        'content_type' => 'text/plain',
        'charset' => 'utf-8'
    ]
];
