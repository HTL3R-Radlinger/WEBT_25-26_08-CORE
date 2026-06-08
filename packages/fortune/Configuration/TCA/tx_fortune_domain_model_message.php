<?php

return [
    'ctrl' => [
        'title'         => 'Fortune Message',
        'label'         => 'message',
        'tstamp'        => 'tstamp',
        'crdate'        => 'crdate',
        'delete'        => 'deleted',
        'searchFields'  => 'message',
    ],
    'columns' => [
        'message' => [
            'label'  => 'Message',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 4,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
    ],
    'types' => [
        '1' => ['showitem' => 'message'],
    ],
];
