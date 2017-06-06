<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/blueprints/modular.yaml',
    'modified' => 1496670479,
    'data' => [
        'title' => 'Gallery',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.an_example_text_field' => [
                                            'type' => 'text',
                                            'label' => 'Add a number',
                                            'default' => 5,
                                            'validate' => [
                                                'required' => true,
                                                'type' => 'int'
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
