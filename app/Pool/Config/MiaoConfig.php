<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/9/21
 * Time: 11:41
 */

namespace App\Pool\Config;

use Swoft\Pool\PoolProperties;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Value;
/**
 * @Bean()
 * Class MiaoConfig
 * @package App\Pool\Config
 */
class MiaoConfig extends PoolProperties
{
    /**
     * the name of pool
     *
     * @Value(name="${config.service.miao.name}", env="${MIAO_POOL_NAME}")
     * @var string
     */
    protected $name = '';
    /**
     * the addresses of connection
     *
     * <pre>
     * [
     *  '127.0.0.1:88',
     *  '127.0.0.1:88'
     * ]
     * </pre>
     *
     * @Value(name="${config.service.miao.uri}", env="${USER_POOL_URI}")
     * @var array
     */
    protected $uri = [];
}