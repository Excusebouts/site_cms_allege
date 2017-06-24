<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/blueprints/modular/timeline.yaml',
    'modified' => 1498308302,
    'data' => [
        'title' => 'Timeline',
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
                                'header.titretimeline' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Titre de la timeline'
                                ],
                                'header.boutonhaut' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Libellé du bouton du haut'
                                ],
                                'header.list' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Liste des items de la timeline',
                                    'fields' => [
                                        '.date' => [
                                            'type' => 'text',
                                            'label' => 'Date'
                                        ],
                                        '.titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        '.texte' => [
                                            'type' => 'text',
                                            'label' => 'Texte'
                                        ],
                                        '.pictogramme' => [
                                            'type' => 'text',
                                            'label' => 'Pictogramme (http://fontawesome.io/icons/)'
                                        ],
                                        '.direction' => [
                                            'type' => 'toggle',
                                            'label' => 'Direction',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'Gauche',
                                                2 => 'Droite'
                                            ],
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.cache' => [
                                            'type' => 'toggle',
                                            'label' => 'Caché',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'Oui',
                                                2 => 'Non'
                                            ]
                                        ]
                                    ]
                                ],
                                'header.boutonbas' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Libellé du bouton du bas'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
