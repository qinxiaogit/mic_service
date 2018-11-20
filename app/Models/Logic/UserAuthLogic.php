<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/11/20
 * Time: 下午11:08
 */

namespace App\Models\Logic;

use App\Models\Dao\PageDao;
use App\Models\Dao\UserDao;
use App\Models\Entity\Pages;
use Swoft\Auth\Mapping\AccountTypeInterface;
use Swoft\Auth\Bean\AuthResult;

use Swoft\Bean\Annotation\Bean;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
use Swoft\Bean\Annotation\Inject;
/**
 * @Bean()
 */
class UserAuthLogic implements AccountTypeInterface
{
    /**
     * @Inject()
     * @var PageDao
     */
    protected $userDao ;

    const ROLE = "admin";

    /**
     * @param array $data
     * @return AuthResult
     * @throws \Swoft\Db\Exception\DbException
     */

    public function login(array $data): AuthResult
    {
        // TODO: Implement login() method.
        $identity = $data['identity'];
        $credential = $data['credential'];
        $result = new AuthResult();

        $user = $this->userDao->getOne($identity);
        if($user instanceof Pages ){
            $result->setExtendedData([self::ROLE => 222]);
            $result->setIdentity($user->getId());
        }
//        var_dump($result);
        return $result;
    }

    public function authenticate(string $identity): bool
    {
        // TODO: Implement authenticate() method.
        return true;

    }

}