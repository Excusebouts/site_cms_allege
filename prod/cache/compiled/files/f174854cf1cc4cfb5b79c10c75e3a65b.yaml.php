<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/themes/dalalu/blueprints/modular/temoignages.yaml',
    'modified' => 1501616373,
    'data' => [
        'title' => 'Témoignages',
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
                                'header.titre_temoignages' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Titre de la section Témoignages'
                                ],
                                'header.list_temoignages' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Liste des témoignages',
                                    'fields' => [
                                        '.texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte du témoignage'
                                        ],
                                        '.auteur' => [
                                            'type' => 'text',
                                            'label' => 'Auteur du témoignage'
                                        ],
                                        '.nom_image' => [
                                            'type' => 'text',
                                            'label' => 'Nom de l\'image du témoignage'
                                        ]
                                    ]
                                ],
                                'header.images' => [
                                    'type' => 'pagemedia',
                                    'label' => 'Images des témoignages'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];