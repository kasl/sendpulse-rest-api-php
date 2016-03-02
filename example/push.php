<?php

use \Kasl\SendPulse\ApiClient;

/*
 * Example: create new push
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

$task = [
    'title' => 'Hello!',
    'body' => 'This is my first push message',
    'website_id' => 1,
    'ttl' => 20,
    'stretch_time' => 10
];

// This is optional
$additionalParams = [
    'link' => 'http://yoursite.com',
    'filter_browsers' => 'Chrome,Safari',
    'filter_lang' => 'en',
    'filter' => '{"variable_name":"some","operator":"or","conditions":[{"condition":"likewith","value":"a"},{"condition":"notequal","value":"b"}]}'
];

var_dump($client->createPushTask($task, $additionalParams));
