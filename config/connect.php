<?php

return [
    'client_id' => env('CONNECT_CLIENT_ID'),
    'secret'    => env('CONNECT_SECRET'),
    'redirect'  => env('CONNECT_REDIRECT_URI'),
    'endpoint'  => env('CONNECT_ENDPOINT', 'https://auth.vatsim.net')
];
