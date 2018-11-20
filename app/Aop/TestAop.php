<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/11/14
 * Time: 17:13
 */

namespace App\Aop;

use Swoft\Aop\JoinPoint;
use Swoft\Aop\ProceedingJoinPoint;
use Swoft\App;
use Swoft\Bean\Annotation\After;
use Swoft\Bean\Annotation\AfterReturning;
use Swoft\Bean\Annotation\AfterThrowing;
use Swoft\Bean\Annotation\Around;
use Swoft\Bean\Annotation\Aspect;
use Swoft\Bean\Annotation\Before;
use Swoft\Bean\Annotation\PointAnnotation;
use Swoft\Bean\Annotation\PointBean;
use Swoft\Bean\Annotation\PointExecution;
use App\Models\Logic\PageLogic;

/**
 * @Aspect()
 * @PointBean(
 *     include={PageLogic::class}
 * )
 * Class TestAop
 * @package App\Aop
 */
class TestAop
{
    /**
     * @Before()
     */
    public function before(){
//        var_dump("\nbefore\n");
    }
    /**
     * @After()
     */
    public function after(){
//        var_dump("\nafter\n");
    }
//
    /**
     * @AfterReturning()
     * @param $joinPoint
     * @return array|string
     */
    public function afterReturn(JoinPoint $joinPoint){
        $result = $joinPoint->getReturn();
//        App::info("text".json_encode($result),$result);
//        $result["aop"] = "afterReturn";
        return  $result;
    }

//    /**
//     * @AfterThrowing()
//     */
//    public function afterThrow(){
//        var_dump("\nafterThrow\n");
//    }
//    private $test = "";
//    /**
//     * @Around()
//     */
//    public function around(ProceedingJoinPoint $proceedingJoinPoint){
////        var_dump("\naround\n");
//        $this->test .= ' around-before1 ';
//        $result = $proceedingJoinPoint->proceed();
//        $this->test .= ' around-after1 ';
//        return $result.$this->test;
//    }
}