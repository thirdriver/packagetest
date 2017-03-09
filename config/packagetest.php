<?php
/**
 * Created by PhpStorm.
 * User: thirdriver
 * Date: 17/3/9
 * Time: 下午4:27
 */

return [

    'debug'        => true,

    'driver'       => [
        'github'        => [
            'app-key'       => env('GITHUB_APP_KEY', ''),
            'app-secret'    => env('GITHUB_APP_SECRET', '')
        ],

        'weibo'         => [
            'app-key'       => env('WEIBO_APP_KEY', ''),
            'app-secret'    => env('WEIBO_APP_SECRET', '')
        ],

        'qq'            => [
            'app-key'       => env('QQ_APP_KEY', ''),
            'app-secret'    => env('QQ_APP_SECRET', '')
        ],
    ]

];