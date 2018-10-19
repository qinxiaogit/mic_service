<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/9/21
 * Time: 16:05
 */

namespace App\Pool;


use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Pool;
use App\Pool\Config\MiaoConfig;
use Swoft\Rpc\Client\Pool\ServicePool;

/**
 * @Pool(name="miao")
 */
class MiaoServicePool extends ServicePool
{
    /**
     * @Inject()
     *
     * @var MiaoConfig
     */
    protected $poolConfig;
}