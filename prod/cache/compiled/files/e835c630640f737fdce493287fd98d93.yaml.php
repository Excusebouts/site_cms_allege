<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/blueprints/modular/services_6_modules.yaml',
    'modified' => 1506269269,
    'data' => [
        'title' => 'Services avec image de fond',
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
                                'header.titre_services' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Titre de la section Services'
                                ],
                                'header.image_fond' => [
                                    'type' => 'pagemedia',
                                    'label' => 'Image de fond (une seule image possible)'
                                ],
                                'header.encart_haut_gauche' => [
                                    'type' => 'fieldset',
                                    'title' => 'Premier encart',
                                    'text' => 'Encart qui se trouve en haut à gauche',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.encart_haut_gauche_pictogramme' => [
                                            'type' => 'file',
                                            'label' => 'Pictogramme',
                                            'destination' => 'user/themes/dalalu/images/service6/',
                                            'limit' => 1,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'header.encart_haut_gauche_titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.encart_haut_gauche_texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
                                        ]
                                    ]
                                ],
                                'header.encart_haut_milieu' => [
                                    'type' => 'fieldset',
                                    'title' => 'Deuxième encart',
                                    'text' => 'Encart qui se trouve en haut au milieu',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.encart_haut_milieu_pictogramme' => [
                                            'type' => 'file',
                                            'label' => 'Pictogramme',
                                            'destination' => 'user/themes/dalalu/images/service6/',
                                            'limit' => 1,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'header.encart_haut_milieu_titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.encart_haut_milieu_texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
                                        ]
                                    ]
                                ],
                                'header.encart_haut_droite' => [
                                    'type' => 'fieldset',
                                    'title' => 'Troisième encart',
                                    'text' => 'Encart qui se trouve en haut à droite',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.encart_haut_droite_pictogramme' => [
                                            'type' => 'file',
                                            'label' => 'Pictogramme',
                                            'destination' => 'user/themes/dalalu/images/service6/',
                                            'limit' => 1,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'header.encart_haut_droite_titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.encart_haut_droite_texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
                                        ]
                                    ]
                                ],
                                'header.encart_bas_gauche' => [
                                    'type' => 'fieldset',
                                    'title' => 'Quatrième encart',
                                    'text' => 'Encart qui se trouve en bas à gauche',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.encart_bas_gauche_pictogramme' => [
                                            'type' => 'file',
                                            'label' => 'Pictogramme',
                                            'destination' => 'user/themes/dalalu/images/service6/',
                                            'limit' => 1,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'header.encart_bas_gauche_titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.encart_bas_gauche_texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
                                        ]
                                    ]
                                ],
                                'header.encart_bas_milieu' => [
                                    'type' => 'fieldset',
                                    'title' => 'Cinquième encart',
                                    'text' => 'Encart qui se trouve en bas au milieu',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.encart_bas_milieu_pictogramme' => [
                                            'type' => 'file',
                                            'label' => 'Pictogramme',
                                            'destination' => 'user/themes/dalalu/images/service6/',
                                            'limit' => 1,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'header.encart_bas_milieu_titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.encart_bas_milieu_texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
                                        ]
                                    ]
                                ],
                                'header.encart_bas_droite' => [
                                    'type' => 'fieldset',
                                    'title' => 'Sixième encart',
                                    'text' => 'Encart qui se trouve en bas à droite',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.encart_bas_droite_pictogramme' => [
                                            'type' => 'file',
                                            'label' => 'Pictogramme',
                                            'destination' => 'user/themes/dalalu/images/service6/',
                                            'limit' => 1,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'header.encart_bas_droite_titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.encart_bas_droite_texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
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
