<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/blueprints/modular/map.yaml',
    'modified' => 1498913392,
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
                                    'type' => 'textarea',
                                    'style' => 'vertical',
                                    'label' => 'Texte à côté de la carte'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
