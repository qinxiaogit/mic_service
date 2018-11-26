<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    "commandRoute"=>[
        "class"=>\Swoft\Console\Router\HandlerMapping::class,
        "suffix"=>'Command',//命令后缀，用于命令组名称缺省时，自动解析命令，参数默认Command
        "defaultCommand"=>'index',//默认操作
        "delimiter"=>":"//命名分割符
    ]
];