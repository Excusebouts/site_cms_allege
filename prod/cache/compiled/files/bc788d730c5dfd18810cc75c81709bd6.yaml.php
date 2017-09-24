<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/themes/dalalu/blueprints/modular/contact_blocpage3.yaml',
    'modified' => 1501616373,
    'data' => [
        'title' => 'Contact Section',
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
                                'header.titre_contact' => [
                                    'type' => 'text',
                                    'style' => 'vertical',
                                    'label' => 'Titre de la section contact'
                                ],
                                'header.texte_contact' => [
                                    'type' => 'textarea',
                                    'style' => 'vertical',
                                    'label' => 'Texte de la section contact'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
