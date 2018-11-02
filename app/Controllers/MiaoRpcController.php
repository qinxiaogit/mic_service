<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/9/21
 * Time: 16:25
 */

namespace App\Controllers;

use App\Lib\MiaoInterface;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
/**
 *
 * @Controller(prefix="/miaoRpc")
 */
class MiaoRpcController
{
    /**
     * @Reference(name="miao", version="1.0.1")
     * @var MiaoInterface
     */
    private $miaoService ;
    /**
     * @RequestMapping()
     * @return array|mixed
     */
    public function  test(){
        return $this->miaoService->getMiao("你好");
    }

    /**
     * @RequestMapping(route="create",method=RequestMethod::GET)
     */
    public function create(){
        $ret = $this->miaoService->addMiao("小明2","18227755589","http://www.baidu.com");
        return ["hello","nihao",$ret];
    }
}