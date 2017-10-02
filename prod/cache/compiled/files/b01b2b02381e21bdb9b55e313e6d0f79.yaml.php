<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/blueprints.yaml',
    'modified' => 1506634563,
    'data' => [
        'name' => 'Dalalu',
        'version' => '0.1.0',
        'description' => 'Dalalu Theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Vibey Cédric',
            'email' => 'cedric.vibey@gmail.com'
        ],
        'homepage' => 'https://github.com/vibey-c-dric/grav-theme-dalalu',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/vibey-c-dric/grav-theme-dalalu/issues',
        'readme' => 'https://github.com/vibey-c-dric/grav-theme-dalalu/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
