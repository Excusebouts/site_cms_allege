<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/themes/dalalu/blueprints/modular/video_lien.yaml',
    'modified' => 1501616372,
    'data' => [
        'title' => 'Video Lien',
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
                                'header.textes' => [
                                    'type' => 'fieldset',
                                    'title' => 'Vidéo',
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
                                        ],
                                        'header.url' => [
                                            'type' => 'text',
                                            'label' => 'Lien de la vidéo'
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
