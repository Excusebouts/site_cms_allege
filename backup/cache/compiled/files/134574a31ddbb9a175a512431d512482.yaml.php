<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/themes/dalalu/blueprints/modular/sliderimage.yaml',
    'modified' => 1507153104,
    'data' => [
        'title' => 'Slider images',
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
                                    'label' => 'Images du slider'
                                ],
                                'header.listurlslider' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Liste des urls des images du slider (correspond à l\'ordre d\'importation)',
                                    'fields' => [
                                        '.nom' => [
                                            'type' => 'text',
                                            'label' => 'Nom de l\'image'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL de l\'image'
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
