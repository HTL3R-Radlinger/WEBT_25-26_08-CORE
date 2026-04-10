<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'FC Bigfoot',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Htl\\FcBigfoot\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Alex Bach',
    'author_email' => 'alex@bac.com',
    'author_company' => 'HTL',
    'version' => '1.0.0',
];
