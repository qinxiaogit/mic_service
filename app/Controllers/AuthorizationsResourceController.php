<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/11/20
 * Time: 下午11:41
 */

namespace App\Controllers;

use Swoft\Auth\Constants\AuthConstants;
use Swoft\Http\Message\Server\Request;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\Auth\Mapping\AuthManagerInterface;
use Swoft\App;

/**
 * 控制器demo
 * @Controller(prefix="/oauth")
 */

class AuthorizationsResourceController
{
    /**
     * @RequestMapping(route="token", method={RequestMethod::GET})
     */
    public function oauth(Request $request) : array
    {
        $identity = $request->query(AuthConstants::BASIC_USER_NAME) ?? '';
        $credential = $request->query(AuthConstants::BASIC_PASSWORD) ?? '';
        if(!$identity || !$credential){
            return [
                "code" => 400,
                "message" => "Identity and Credential are required.",
                $identity,
                $credential
            ];
        }
        /** @var AuthManagerService $manager */
        $manager = App::getBean(AuthManagerInterface::class);
        /** @var AuthSession $session */
        $session = $manager->adminBasicLogin($identity, $credential);
        $data = [
            'token' => $session->getToken(),
            'expire' => $session->getExpirationTime()
        ];
        return $data;
    }


}