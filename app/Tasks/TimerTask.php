<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/11/25
 * Time: 下午1:57
 */

namespace App\Tasks;


use Swoft\Task\Bean\Annotation\Scheduled;
use Swoft\Task\Bean\Annotation\Task;

/**
 * Class TimerTask
 * @package App\Tasks
 * @Task("timer")
 */
class TimerTask
{
    /**
     * @param string $strOne
     * @param string $strTwo
     * @return string
     */
    public function coroutineJob(string $strOne ,string $strTwo) :string
    {
        return sprintf("co-%s-%s",$strOne,$strTwo);
    }

    public function asyncJob(string $strOne , string $strTwo):string {
        return sprintf("asyn-%s-%s",$strOne,$strTwo);
    }

    /**
     * 测试定时任务
     * @Scheduled(cron="1 * * * * *")
     */
    public function cronTime(){
        echo date("Y-m-d HH:ii:ss");
        return time().PHP_EOL;
    }

}