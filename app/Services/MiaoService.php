<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/9/21
 * Time: 10:50
 */

namespace App\Services;

use App\Lib\MiaoInterface;
use App\Models\Logic\PageLogic;
use Swoft\App;
use Swoft\Bean\Annotation\Enum;
use Swoft\Bean\Annotation\Floats;
use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Number;
use Swoft\Bean\Annotation\Strings;
use Swoft\Rpc\Server\Bean\Annotation\Service;
use Swoft\Core\ResultInterface;
use App\Models\Entity\Users;
//use App\Models\
/**
 * @method ResultInterface deferGetMiao(array $ids)// 实现了接口 MiaoInterface，版本号为 0
 * @method ResultInterface deferSetMiao(string $name,string $phone,string $head) 版本号为 0
 * @Service(version="1.0.1")
 */

class MiaoService implements MiaoInterface
{
    /**
     * @param string $id
     * @return array
     *  <pre>
     *  [
     *  'id'=>1,
     *  'name'=>'test'
     * ]
     */
    public function getMiao(string $id)
    {
        return ["id"=>$id,"name"=>self::class];//self::class];
    }

    /**
     * @param string $name
     * @param string $phone
     * @param string $head
     * @return array
     */
    public function addMiao(string $name,string $phone,string $head){
        $i = 1;
        $reRe = [];
//        for ($i=0;$i<100;$i++){
            $user = new Users();
            $user->setName($name);
            $user->setPhone($phone);
            $user->setHeadUrl($head);
            $user->save();
//            unset($user);
//            $reRe[] = $i;
//        }
//        print_r($reRe);die();
        return ["id"=>$name,"name"=>[1,2,3,4,5]];
    }
    /**
     * @Inject()
     * @var PageLogic
     */
    private $pageLogic;
    public function pages(string $status = "ACTIVE"){
//        $res = App::getLogger()->info(base64_encode($this->pageLogic->getList($status)));
        return $this->pageLogic->getList($status);
    }

}