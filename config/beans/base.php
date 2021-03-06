<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'serverDispatcher' => [
        'middlewares' => [
            \Swoft\View\Middleware\ViewMiddleware::class,
             \Swoft\Devtool\Middleware\DevToolMiddleware::class,
             \Swoft\Session\Middleware\SessionMiddleware::class,
              App\Middlewares\ActionTestMiddleware::class,
              App\Middlewares\MiaoMidedleware::class,
             \Swoft\Auth\Middleware\AuthMiddleware::class

        ]
    ],
    'httpRouter'       => [
        'ignoreLastSlash'  => true,
        'tmpCacheNumber' => 0,
        'matchAll'       => '',
    ],
    'requestParser'    => [
        'parsers' => [

        ],
    ],
    'view'             => [
        'viewsPath' => '@resources/views/',
    ],
    'cache'            => [
        'driver' => 'redis',
    ],
    'demoRedis' => [
        'class' => \Swoft\Redis\Redis::class,
        'poolName' => 'demoRedis'
    ],
    'providerSelector' => [
        'class' => \Swoft\Sg\ProviderSelector::class,
        'provider' => 'consul',
        'providers' => [
            'consul' => \Swoft\Sg\Provider\ConsulProvider::class
        ],
    ],
    'balancerSelector' => [
        'class' => \Swoft\Sg\BalancerSelector::class,
        'balancer' => 'random',
        'balancers' => [
            'random' => \Swoft\Sg\Balancer\RandomBalancer::class
        ]
    ],
    \Swoft\Auth\Mapping\AuthManagerInterface::class => [
        'class'=>App\Services\AuthManagerService::class
    ],

];
