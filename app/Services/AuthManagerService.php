<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/11/20
 * Time: 下午11:02
 */

namespace App\Services;
use App\Models\Logic\UserAuthLogic;
use Swoft\Auth\AuthManager;
use Swoft\Auth\Mapping\AuthManagerInterface;
use Swoft\Auth\Bean\AuthSession;

use Swoft\Bean\Annotation\Bean;
use Swoft\Cache\Cache;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
/**
 * Class AuthManagerService
 * @Bean()
 * @package App\Services
 */

class AuthManagerService extends AuthManager implements AuthManagerInterface
{

    /**
     * @var string
     */
//    protected $cacheClass = Cache::class;

    /**
     * @var bool 开启缓存
     */
    protected $cacheEnable = false;

    public function adminBasicLogin(string $identity, string $credential) : AuthSession
    {
        return $this->login(UserAuthLogic::class, [
            'identity' => $identity,
            'credential' => $credential
        ]);
    }

}