<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/grav-admin/user/themes/quark/blueprints/pages/partners.yaml',
    'modified' => 1752717853,
    'size' => 3012,
    'data' => [
        'title' => 'Partners Page',
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
                                    'help' => 'Описание страницы партнеров'
                                ]
                            ]
                        ],
                        'partners' => [
                            'type' => 'tab',
                            'title' => 'Клиенты и партнеры',
                            'fields' => [
                                'header.partners' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Список клиентов и партнеров',
                                    'help' => 'Добавьте логотипы и информацию о ваших клиентах и партнерах',
                                    'collapsed' => false,
                                    'btnLabel' => 'Добавить партнера',
                                    'fields' => [
                                        '.company_name' => [
                                            'type' => 'text',
                                            'label' => 'Название компании',
                                            'placeholder' => 'Введите название компании',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.logo_upload' => [
                                            'type' => 'file',
                                            'label' => 'Загрузить логотип',
                                            'destination' => 'user://pages/02.o-kompanii/02.klienty-i-partnery',
                                            'multiple' => false,
                                            'limit' => 1,
                                            'filesize' => 2,
                                            'accept' => [
                                                0 => '.jpg',
                                                1 => '.jpeg',
                                                2 => '.png',
                                                3 => '.gif',
                                                4 => '.webp',
                                                5 => '.svg'
                                            ],
                                            'help' => 'Загрузите логотип компании. Максимальный размер 2MB.'
                                        ],
                                        '.partnership_type' => [
                                            'type' => 'select',
                                            'label' => 'Тип сотрудничества',
                                            'options' => [
                                                'client' => 'Клиент',
                                                'partner' => 'Партнер',
                                                'supplier' => 'Поставщик',
                                                'strategic' => 'Стратегический партнер'
                                            ],
                                            'default' => 'client'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Описание сотрудничества (необязательно)',
                                            'placeholder' => 'Краткое описание партнерства или выполненных проектов',
                                            'rows' => 3
                                        ],
                                        '.website' => [
                                            'type' => 'url',
                                            'label' => 'Веб-сайт (необязательно)',
                                            'placeholder' => 'https://example.com'
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
