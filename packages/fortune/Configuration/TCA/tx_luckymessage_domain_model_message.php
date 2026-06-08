<?php

defined('TYPO3') or die();

return [
    'ctrl' => [
        'title'         => 'message',
        'label'         => 'message',
        'tstamp'        => 'tstamp',
        'crdate'        => 'crdate',
        'delete'        => 'deleted',
        'searchFields'  => 'message',
    ],
    'types' => [
        '0' => ['showitem' => 'message'],
    ],
    'columns' => [
        'message' => [
            'label'  => 'message',
            'config' => [
                'type'     => 'text',
                'rows'     => 4,
                'cols'     => 60,
                'eval'     => 'trim',
                'required' => true,
            ],
        ],
    ],
];
