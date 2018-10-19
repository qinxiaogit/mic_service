<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'master' => [
        'name'        => 'master',
        'uri'         => [
            '172.18.10.142:3306/miao?user=root&password=miao&charset=utf8',
            '172.18.10.142:3306/miao?user=root&password=miao&charset=utf8',
        ],
        'minActive'   => 8,
        'maxActive'   => 8,
        'maxWait'     => 8,
        'timeout'     => 8,
        'maxIdleTime' => 60,
        'maxWaitTime' => 3,
    ],

    'slave' => [
        'name'        => 'slave',
        'uri'         => [
            '172.18.10.142:3306/miao?user=root&password=miao&charset=utf8',
            '172.18.10.142:3306/miao?user=root&password=miao&charset=utf8',
        ],
        'minActive'   => 8,
        'maxActive'   => 8,
        'maxWait'     => 8,
        'timeout'     => 8,
        'maxIdleTime' => 60,
        'maxWaitTime' => 3,
    ],
];