<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/cms_dalalu/site_cms_allege/prod/user/config/plugins/email.yaml',
    'modified' => 1506634563,
    'data' => [
        'enabled' => true,
        'from' => 'c.vibey@alltech.fr',
        'to' => 'cedric.vibey@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'ssl0.ovh.net',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'c.vibey@alltech.fr',
                'password' => 'cedricpass!pass'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
