<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/themes/dalalu/blueprints/modular/video_upload.yaml',
    'modified' => 1501616373,
    'data' => [
        'title' => 'Video Upload',
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
                                'header.video' => [
                                    'type' => 'pagemedia',
                                    'limit' => 1,
                                    'label' => 'Vidéo',
                                    'accept' => [
                                        0 => 'video/*'
                                    ]
                                ],
                                'header.textes' => [
                                    'type' => 'fieldset',
                                    'title' => 'Texte situé à côté de la vidéo',
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
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
