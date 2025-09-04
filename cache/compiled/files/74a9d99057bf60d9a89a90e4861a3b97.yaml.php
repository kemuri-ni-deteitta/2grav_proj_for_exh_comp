<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/gravPr/gravExpo/user/themes/quark/blueprints/pages/reviews.yaml',
    'modified' => 1756931204,
    'size' => 7096,
    'data' => [
        'title' => 'Отзывы',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'xss_check' => [
                                    'type' => 'xss'
                                ],
                                'header.title' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'PLUGIN_ADMIN.TITLE'
                                ],
                                'content' => [
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.media_order' => [
                                    'type' => 'pagemedia',
                                    'label' => 'PLUGIN_ADMIN.PAGE_MEDIA'
                                ]
                            ]
                        ],
                        'reviews' => [
                            'type' => 'tab',
                            'title' => 'Отзывы',
                            'fields' => [
                                'header.reviews' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Список отзывов',
                                    'help' => 'Добавьте отзывы клиентов',
                                    'collapsed' => false,
                                    'btnLabel' => 'Добавить отзыв',
                                    'fields' => [
                                        '.company_name' => [
                                            'type' => 'text',
                                            'label' => 'Название компании',
                                            'placeholder' => 'Введите название компании (необязательно)'
                                        ],
                                        '.review_text' => [
                                            'type' => 'textarea',
                                            'label' => 'Текст отзыва',
                                            'placeholder' => 'Введите текст отзыва (необязательно)',
                                            'rows' => 4
                                        ],
                                        '.image_upload' => [
                                            'type' => 'file',
                                            'label' => 'Загрузить фотографию',
                                            'destination' => 'user://pages/02.o-kompanii/03.otzyvy',
                                            'multiple' => false,
                                            'limit' => 1,
                                            'filesize' => 5,
                                            'accept' => [
                                                0 => '.jpg',
                                                1 => '.jpeg',
                                                2 => '.png',
                                                3 => '.gif',
                                                4 => '.webp'
                                            ],
                                            'help' => 'Загрузите фотографию отзыва (необязательно). Максимальный размер 5MB.'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.OPTIONS',
                            'fields' => [
                                'ordering' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX',
                                    'help' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'folder' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                                    'help' => 'PLUGIN_ADMIN.FOLDER_NAME_HELP',
                                    'validate' => [
                                        'rule' => 'slug'
                                    ]
                                ],
                                'route' => [
                                    'type' => 'parents',
                                    'label' => 'PLUGIN_ADMIN.PARENT',
                                    'classes' => 'fancy'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
