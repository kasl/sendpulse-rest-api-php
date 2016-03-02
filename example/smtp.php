<?php

use \Kasl\SendPulse\ApiClient;

/*
 * Example: send email through smtp
 *
 * Documentation
 * https://login.sendpulse.com/manual/rest-api/
 * https://sendpulse.com/api
 */

$config = [
    'id' => '',
    'secret' => '',
    'storage' => '',
];

$client = new ApiClient($config['id'], $config['secret'], $config['storage']);

// Send mail using SMTP
$email = [
    'html' => '<p>Hello!</p>',
    'text' => 'text',
    'subject' => 'Mail subject',
    'from' => [
        'name' => 'John',
        'email' => 'John@domain.com'
    ],
    'to' => [
        [
            'name' => 'Client',
            'email' => 'client@domain.com'
        ]
    ],
    'bcc' => [
        [
            'name' => 'Manager',
            'email' => 'manager@domain.com'
        ]
    ]
];

var_dump($client->smtpSendMail($email));
