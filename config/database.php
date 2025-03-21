<?php

return [
    'default' => [
        'driver'    => 'mysql',
        'host'      => '127.0.0.1',
        'database'  => 'paviehol_gsa',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix'    => '',
    ],

    'connections' => [
        'db1' => [
            'driver'    => 'mysql',
            'host'      => $_ENV['DB1_HOST'] ?? '127.0.0.1',
            'database'  => $_ENV['DB1_NAME'] ?? 'autre_db1',
            'username'  => $_ENV['DB1_USER'] ?? 'root',
            'password'  => $_ENV['DB1_PASS'] ?? '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
        'db2' => [
            'driver'    => 'mysql',
            'host'      => $_ENV['DB2_HOST'] ?? '127.0.0.1',
            'database'  => $_ENV['DB2_NAME'] ?? 'autre_db2',
            'username'  => $_ENV['DB2_USER'] ?? 'root',
            'password'  => $_ENV['DB2_PASS'] ?? '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
    ]
];
