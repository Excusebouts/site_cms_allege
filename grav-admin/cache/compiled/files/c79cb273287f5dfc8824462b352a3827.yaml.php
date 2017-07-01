<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/blueprints/modular/carousel_avec_textes.yaml',
    'modified' => 1498395719,
    'data' => [
        'title' => 'Carousel avec textes',
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
                                    'type' => 'fieldset',
                                    'title' => 'Texte situé à côté du carousel d\'images',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        'header.texte' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte'
                                        ]
                                    ]
                                ],
                                'header.direction' => [
                                    'type' => 'toggle',
                                    'label' => 'Côté où sont situées les images du carousel',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Gauche',
                                        2 => 'Droite'
                                    ],
                                    'validate' => [
                                        'required' => true
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
