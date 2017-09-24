<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/themes/dalalu/blueprints/modular/menu.yaml',
    'modified' => 1501616372,
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
