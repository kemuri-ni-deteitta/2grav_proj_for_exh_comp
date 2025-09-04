<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/gravPr/gravExpo/user/themes/quark/blueprints/pages/certificates.yaml',
    'modified' => 1756931204,
    'size' => 2596,
    'data' => [
        'title' => 'Certificates Page',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.title' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'PLUGIN_ADMIN.TITLE'
                                ],
                                'header.menu' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.MENU',
                                    'help' => 'PLUGIN_ADMIN.MENU_HELP'
                                ],
                                'content' => [
                                    'type' => 'editor',
                                    'label' => 'PLUGIN_ADMIN.CONTENT',
                                    'help' => 'Описание страницы сертификатов'
                                ]
                            ]
                        ],
                        'certificates' => [
                            'type' => 'tab',
                            'title' => 'Сертификаты',
                            'fields' => [
                                'header.certificates' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Список сертификатов',
                                    'help' => 'Добавьте сертификаты с изображениями и описаниями',
                                    'collapsed' => false,
                                    'btnLabel' => 'Добавить сертификат',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Название сертификата',
                                            'placeholder' => 'Введите название сертификата',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.image_upload' => [
                                            'type' => 'file',
                                            'label' => 'Загрузить новое изображение',
                                            'destination' => 'user://pages/02.o-kompanii/04.sertifikaty',
                                            'multiple' => false,
                                            'limit' => 1,
                                            'filesize' => 2,
                                            'accept' => [
                                                0 => '.jpg',
                                                1 => '.jpeg',
                                                2 => '.png',
                                                3 => '.gif',
                                                4 => '.webp'
                                            ],
                                            'help' => 'Загрузите новое изображение сертификата. Максимальный размер 2MB.'
                                        ],
                                        '.image_name' => [
                                            'help' => 'Альтернативно, введите имя уже загруженного файла'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Описание (необязательно)',
                                            'placeholder' => 'Краткое описание сертификата',
                                            'rows' => 3
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
