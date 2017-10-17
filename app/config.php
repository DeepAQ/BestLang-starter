<?php

return [
    'db' => [
        'dsn' => 'mysql:host=localhost;dbname=bestlang_test',
        'user' => 'bestlang',
        'pass' => 'BestLang'
    ],

    'cache' => [
        'provider' => '\BestLang\ext\cache\WinCache2'
    ]
];