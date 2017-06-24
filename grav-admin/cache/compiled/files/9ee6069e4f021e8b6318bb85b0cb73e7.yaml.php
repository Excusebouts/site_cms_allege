<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/blueprints/modular/services.yaml',
    'modified' => 1498311582,
    'data' => [
        'title' => 'Services',
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
                                'header.encart_gauche' => [
                                    'type' => 'fieldset',
                                    'title' => 'Premier encart',
                                    'text' => 'Encart qui se trouve à gauche',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.encart_gauche_pictogramme' => [
                                            'type' => 'text',
                                            'label' => 'Pictogramme (http://fontawesome.io/icons/)'
                                        ],
                                        'header.encart_gauche_titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.encart_gauche_texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
                                        ],
                                        'header.encart_gauche_texte_cache' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte caché'
                                        ]
                                    ]
                                ],
                                'header.encart_milieu' => [
                                    'type' => 'fieldset',
                                    'title' => 'Deuxième encart',
                                    'text' => 'Encart qui se trouve au milieu',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.encart_milieu_pictogramme' => [
                                            'type' => 'text',
                                            'label' => 'Pictogramme (http://fontawesome.io/icons/)'
                                        ],
                                        'header.encart_milieu_titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.encart_milieu_texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
                                        ],
                                        'header.encart_milieu_texte_cache' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte caché'
                                        ]
                                    ]
                                ],
                                'header.encart_droite' => [
                                    'type' => 'fieldset',
                                    'title' => 'Troisième encart',
                                    'text' => 'Encart qui se trouve à droite',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.encart_droite_pictogramme' => [
                                            'type' => 'text',
                                            'label' => 'Pictogramme (http://fontawesome.io/icons/)'
                                        ],
                                        'header.encart_droite_titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.encart_droite_texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
                                        ],
                                        'header.encart_droite_texte_cache' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte caché'
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
