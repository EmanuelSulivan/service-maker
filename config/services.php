<?php
return [
    'github'   => [
        'client_id'     => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect'      => '/auth/callback',
    ],

    'facebook' => [
        'client_id'     => '374314877474866',
        'client_secret' => '518d344f48b677b1313923cd31631678',
        'redirect'      => 'http://localhost:8000/auth/facebook/callback',
    ],
];
