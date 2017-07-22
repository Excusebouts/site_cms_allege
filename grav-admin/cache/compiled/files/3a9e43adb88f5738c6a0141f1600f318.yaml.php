<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/blueprints/modular/telechargement.yaml',
    'modified' => 1500731457,
    'data' => [
        'title' => 'Telechargement',
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
                                'header.titre_telechargement' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Titre de la section Téléchargements'
                                ],
                                'header.soustitre_telechargement' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Sous-Titre de la section Téléchargements'
                                ],
                                'header.list' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Liste des items de la timeline',
                                    'fields' => [
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Url du lien de téléchargements'
                                        ],
                                        '.titre' => [
                                            'type' => 'text',
                                            'label' => 'Titre du lien de téléchargements'
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
