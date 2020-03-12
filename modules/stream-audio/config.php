<?php

return [
    '__name' => 'stream-audio',
    '__version' => '0.1.0',
    '__git' => 'git@github.com:getmim/stream-audio.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/stream-audio' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'StreamAudio\\Model' => [
                'type' => 'file',
                'base' => 'modules/stream-audio/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'stream-audio' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'title' => [
                    'type' => 'text'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'url' => [
                    'type' => 'text'
                ],
                'curr_cover' => [
                    'type' => 'media'
                ],
                'curr_artist' => [
                    'type' => 'text'
                ],
                'curr_song' => [
                    'type' => 'text'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];