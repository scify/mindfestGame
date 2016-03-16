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

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\Models\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect' => 'http://192.168.1.15/mindFestGame/public/account/facebook',
    ],

    'twitter' => [
        'client_id' => env('TWITTER_ID'),
        'client_secret' => env('TWITTER_SECRET'),
        'redirect' => 'http://192.168.1.15/mindFestGame/public/account/twitter',
    ],

    'googlePlus' => [
        'client_id' => env('GOOGLEPLUS_ID'),
        'client_secret' => env('GOOGLEPLUS_SECRET'),
        'redirect' => 'http://192.168.1.15/mindFestGame/public/account/googlePlus',
    ],

    'github' => [
        'client_id' => '03e6499db6fc471710a3',
        'client_secret' => '7171d8a03ba1e67d965f00409fe57243151b0a16',
        'redirect' => 'http://192.168.1.15/mindFestGame/public/',
    ],

];
