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
        'client_id' => '1819093195014069',
        'client_secret' => '2e5a1a4827cf3a5d6659ef9ab3d73d31',
        'redirect' => 'http://localhost:98/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'DoscSnlI1QrAfOHN2kGO7hy58',
        'client_secret' => '7sqYTcWMLFHdX5gGztb7tWOBlnCwCnZPWs32o9WoMkpFmpejbx',
        'redirect' => 'http://localhost:98/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '356997766323-5hajfe49k9agbpfm8ne08l3cvhlcge0u.apps.googleusercontent.com',
        'client_secret' => 'xouX47YUoPFHIzV5qDVAd2j3',
        'redirect' => 'http://localhost:98/auth/google/callback',
    ],


];
