<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/themes/dalalu/blueprints/modular/map.yaml',
    'modified' => 1507153107,
    'data' => [
        'title' => 'Map',
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
                                'header.titre_map' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Titre de la section avec la carte'
                                ],
                                'header.grande_carte' => [
                                    'type' => 'toggle',
                                    'label' => 'Carte sur toute la largeur de la page',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Oui',
                                        2 => 'Non'
                                    ],
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.texte_map' => [
                                    'type' => 'fieldset',
                                    'title' => 'Texte et image à côté de la carte',
                                    'collapsed' => false,
                                    'collapsible' => false,
                                    'fields' => [
                                        'header.texte' => [
                                            'type' => 'textarea',
                                            'style' => 'vertical',
                                            'label' => 'Texte'
                                        ],
                                        'header.image' => [
                                            'type' => 'file',
                                            'label' => 'Image',
                                            'destination' => 'user/themes/dalalu/images/map/',
                                            'limit' => 1,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ]
                                    ]
                                ],
                                'header.liste_adresses' => [
                                    'name' => 'liens',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Liste des adresses de la carte',
                                    'fields' => [
                                        '.adresse' => [
                                            'type' => 'text',
                                            'label' => 'Adresse'
                                        ],
                                        '.image' => [
                                            'type' => 'file',
                                            'label' => 'Image',
                                            'destination' => 'user/themes/dalalu/images/map/',
                                            'limit' => 1,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        '.texte' => [
                                            'type' => 'text',
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
