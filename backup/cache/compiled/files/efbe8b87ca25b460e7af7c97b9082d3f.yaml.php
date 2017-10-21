<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/www/lafranchise.dalalu.fr/user/config/plugins/email.yaml',
    'modified' => 1507229721,
    'data' => [
        'enabled' => true,
        'from' => 'franchisedalalu@dalalu.fr',
        'to' => 'franchisedalalu@dalalu.fr',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => '192.168.25.2',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
