
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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
        'client_id' => '246856929013049',
        'client_secret' => 'e7f8aaf7c0cc685027551663e89d0d58',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],
    'twitter' => [
        'client_id' => '9PQW5ucTXW6By6HbGiVuGv7Fa',
        'client_secret' => 'WhzVpuv4CYQzs4gdB92PnbiwV0zUmWnkggLiSVOiGrLD52MW1m',
        'redirect' => 'http://localhost:8000/callback/twitter',
    ],
    'google' => [
        'client_id' => '125648152507-n9p5j20cpea4ae0ohfcus9is3jto8cdm.apps.googleusercontent.com',
        'client_secret' => 'bkjsYRvVzhxBhaTS4Gs2axys',
        'redirect' => 'http://localhost:8000/callback/google',
    ],
];
