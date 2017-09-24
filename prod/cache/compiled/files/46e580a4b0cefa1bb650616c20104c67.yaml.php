<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/blueprints/modular/sidemenuaccueil.yaml',
    'modified' => 1497296380,
    'data' => [
        'title' => 'SideMenu',
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
                                'header.menu_text' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.menu_texte1' => [
                                                    'type' => 'text',
                                                    'label' => 'Libellé du lien de contact'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.menu_url1' => [
                                                    'type' => 'text',
                                                    'label' => 'URL du lien de contact'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.menu_text2' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.menu_texte2' => [
                                                    'type' => 'text',
                                                    'label' => 'Libellé du lien de la zone de téléchargement'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.menu_url2' => [
                                                    'type' => 'text',
                                                    'label' => 'URL du lien de la zone de téléchargement'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.menu_text3' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.menu_texte3' => [
                                                    'type' => 'text',
                                                    'label' => 'Libellé du lien des secteurs'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.menu_url3' => [
                                                    'type' => 'text',
                                                    'label' => 'URL du lien des secteurs'
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
        ]
    ]
];
