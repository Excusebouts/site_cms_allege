<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/themes/dalalu/blueprints/modular/image.yaml',
    'modified' => 1507153106,
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
                                    'label' => 'Image du slider'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
