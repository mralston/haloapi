<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Halo ITSM API
    |--------------------------------------------------------------------------
    |
    | Credentials and host required to connect to Halo ITSM API
    */

    'client_id' => env('HALO_CLIENT_ID'),
    'client_secret' => env('HALO_CLIENT_SECRET'),
    'grant_type' => 'client_credentials',
    'scope' => env('HALO_SCOPE', 'all'),
    'host' => env('HALO_HOST'),
    'verifypeer' => env('HALO_VERIFY_PEER', true),
    'timeout' => (int) env('HALO_TIMEOUT', 30),
    'connect_timeout' => (int) env('HALO_CONNECT_TIMEOUT', 10),
    'return_object' => true,

];
