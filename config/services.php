<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1613222222318622',
        'client_secret' => 'b6ec79dc6db7e720861e72ed47a8cb3b',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'DoscSnlI1QrAfOHN2kGO7hy58',
        'client_secret' => '7sqYTcWMLFHdX5gGztb7tWOBlnCwCnZPWs32o9WoMkpFmpejbx',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '143765501532-7mnaps22huvdb5qhk42mpmqflqkts6dl.apps.googleusercontent.com',
        'client_secret' => 'nC7kwwlJvREBhJ9DS3JepXVF',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
