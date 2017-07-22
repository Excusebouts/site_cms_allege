<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/blueprints/modular/image.yaml',
    'modified' => 1497299970,
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
