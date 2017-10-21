<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/blueprints/modular/footer.yaml',
    'modified' => 1508599105,
    'data' => [
        'title' => 'Footer',
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
                                'header.list' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.list_gauche' => [
                                                    'name' => 'liens',
                                                    'type' => 'list',
                                                    'style' => 'vertical',
                                                    'label' => 'Liste de liens à gauche (max. 7 éléments)',
                                                    'fields' => [
                                                        '.text' => [
                                                            'type' => 'text',
                                                            'label' => 'Nom'
                                                        ],
                                                        '.url' => [
                                                            'type' => 'text',
                                                            'label' => 'URL'
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.list_droite' => [
                                                    'name' => 'liens',
                                                    'type' => 'list',
                                                    'style' => 'vertical',
                                                    'label' => 'Liste de liens à droite (max. 7 éléments)',
                                                    'fields' => [
                                                        '.text' => [
                                                            'type' => 'text',
                                                            'label' => 'Nom'
                                                        ],
                                                        '.url' => [
                                                            'type' => 'text',
                                                            'label' => 'URL'
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.nomsociete' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Nom de la société'
                                ],
                                'header.adressesociete' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Adresse de la société'
                                ],
                                'header.telephonesociete' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Téléphone de la société'
                                ],
                                'header.bouton' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.bouton_texte' => [
                                                    'type' => 'text',
                                                    'label' => 'Texte du bouton'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.bouton_url' => [
                                                    'type' => 'text',
                                                    'label' => 'URL du bouton'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                '.reseaux_sociaux_fieldset' => [
                                    'type' => 'fieldset',
                                    'title' => 'Réseaux Sociaux',
                                    'fields' => [
                                        '.reseaux_sociaux_colonnes' => [
                                            'type' => 'columns',
                                            'fields' => [
                                                '.column1' => [
                                                    'type' => 'column',
                                                    'fields' => [
                                                        'header.facebook_url' => [
                                                            'type' => 'text',
                                                            'label' => 'Url'
                                                        ],
                                                        'header.facebook_picto' => [
                                                            'type' => 'file',
                                                            'label' => 'Image',
                                                            'destination' => 'user/themes/dalalu/images/footer/',
                                                            'limit' => 1,
                                                            'accept' => [
                                                                0 => 'image/*'
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                '.column2' => [
                                                    'type' => 'column',
                                                    'fields' => [
                                                        'header.twitter_url' => [
                                                            'type' => 'text',
                                                            'label' => 'Url'
                                                        ],
                                                        'header.twitter_picto' => [
                                                            'type' => 'file',
                                                            'label' => 'Image',
                                                            'destination' => 'user/themes/dalalu/images/footer/',
                                                            'limit' => 1,
                                                            'accept' => [
                                                                0 => 'image/*'
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                '.column3' => [
                                                    'type' => 'column',
                                                    'fields' => [
                                                        'header.youtube_url' => [
                                                            'type' => 'text',
                                                            'label' => 'Url'
                                                        ],
                                                        'header.youtube_picto' => [
                                                            'type' => 'file',
                                                            'label' => 'Image',
                                                            'destination' => 'user/themes/dalalu/images/footer/',
                                                            'limit' => 1,
                                                            'accept' => [
                                                                0 => 'image/*'
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.raisonsocialsociete' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Raison Social de la société'
                                ],
                                'header.creditphoto' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Crédit photos'
                                ],
                                'header.copyright' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Copyright'
                                ],
                                'header.conception' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Conception et réalisation'
                                ],
                                'header.images' => [
                                    'type' => 'pagemedia',
                                    'label' => 'Images du bas de page'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
