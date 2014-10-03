<?php

$config = new \Phalcon\Config([
    'admin_email' => 'admin@example.com',
]);

$services = new \Phalcon\Config([
    'config' => $config,
    'fn1'    => function ($di) {
        $di->fn1 = 'val1';
    },
    'fn2'    => function ($di) {
        $di->fn2 = 'val2';
    },
    'simple' => [
        'className' => '\stdClass',
    ],
    'simple2' => [
        'className' => '\stdClass',
        'shared'    => false,
    ],
]);

return $services;
