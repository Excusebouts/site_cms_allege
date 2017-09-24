<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/config/plugins/email.yaml',
    'modified' => 1501616233,
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
