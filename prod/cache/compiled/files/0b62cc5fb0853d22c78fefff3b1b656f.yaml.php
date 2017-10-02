<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/blueprints/modular/menu.yaml',
    'modified' => 1506175758,
    'data' => [
        'title' => 'Menu',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'content' => [
                                    'unset@' => true
                                ],
                                'uploads' => [
                                    'unset@' => true
                                ],
                                'header.page1' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.nompage1' => [
                                                    'type' => 'text',
                                                    'label' => 'Nom de la page 1'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.urlpage1' => [
                                                    'type' => 'text',
                                                    'label' => 'Url de la page 1'
                                                ]
                                            ]
                                        ],
                                        'column3' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.surbrillance_page_1' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Surbrillance',
                                                    'default' => 2,
                                                    'options' => [
                                                        1 => 'Oui',
                                                        2 => 'Non'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.page2' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.nompage2' => [
                                                    'type' => 'text',
                                                    'label' => 'Nom de la page 2'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.urlpage2' => [
                                                    'type' => 'text',
                                                    'label' => 'Url de la page 2'
                                                ]
                                            ]
                                        ],
                                        'column3' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.surbrillance_page_2' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Surbrillance',
                                                    'default' => 2,
                                                    'options' => [
                                                        1 => 'Oui',
                                                        2 => 'Non'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.page3' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.nompage3' => [
                                                    'type' => 'text',
                                                    'label' => 'Nom de la page 3'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.urlpage3' => [
                                                    'type' => 'text',
                                                    'label' => 'Url de la page 3'
                                                ]
                                            ]
                                        ],
                                        'column3' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.surbrillance_page_3' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Surbrillance',
                                                    'default' => 2,
                                                    'options' => [
                                                        1 => 'Oui',
                                                        2 => 'Non'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.partpage3' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Liste des parties de la page 3',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Nom de la partie'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL de la partie'
                                        ]
                                    ]
                                ],
                                'header.page4' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.nompage4' => [
                                                    'type' => 'text',
                                                    'label' => 'Nom de la page 4'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.urlpage4' => [
                                                    'type' => 'text',
                                                    'label' => 'Url de la page 4'
                                                ]
                                            ]
                                        ],
                                        'column3' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.surbrillance_page_4' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Surbrillance',
                                                    'default' => 2,
                                                    'options' => [
                                                        1 => 'Oui',
                                                        2 => 'Non'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.images' => [
                                    'type' => 'pagemedia',
                                    'label' => 'Images du menu'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
