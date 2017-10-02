<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/blueprints/modular/photozone.yaml',
    'modified' => 1506021003,
    'data' => [
        'title' => 'Photozone',
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
                                'header.images' => [
                                    'type' => 'pagemedia',
                                    'label' => 'Images du carousel'
                                ],
                                'header.textes' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.image_gauche' => [
                                                    'type' => 'text',
                                                    'label' => 'Nom de l\'image à gauche'
                                                ],
                                                'header.texte_gauche' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Texte sous l\'image affiché à gauche'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.image_droite' => [
                                                    'type' => 'text',
                                                    'label' => 'Nom de l\'image à droite'
                                                ],
                                                'header.texte_droite' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Texte sous l\'image affiché à droite'
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
