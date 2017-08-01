<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/blueprints/modular/contact_blocpage1.yaml',
    'modified' => 1501409275,
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
