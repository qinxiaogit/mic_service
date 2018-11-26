<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/11/25
 * Time: 上午11:43
 */

namespace App\Commands;


//use Swoft\Console\Bean\Annotation\Command;
//use Swoft\Console\Bean\Annotation\Mapping;
//use Swoft\Console\Input\Input;
//use Swoft\Console\Output\Output;
//use Swoft\Core\Coroutine;
//use Swoft\Task\Task;
use App\Models\Logic\UserLogic;
use Swoft\App;
use Swoft\Console\Bean\Annotation\Command;
use Swoft\Console\Bean\Annotation\Mapping;
use Swoft\Console\Input\Input;
use Swoft\Console\Output\Output;
use Swoft\Core\Coroutine;
use Swoft\Log\Log;
use Swoft\Task\Task;

/**
 * Class ShellCommand
 * @package App\Commands
 * @Command(coroutine=false)
 */
class ShellCommand
{
    /**
     * this test command
     *
     * @Usage
     * shell:{command} [arguments] [options]
     *
     * @Options
     * -o,--o this is command option
     * -x,--x this exec x
     *
     * @Arguments
     * arg  this is argument
     * name this is name
     *
     * @Example
     * php swoft shell:exec arg=stelin -o opt
     *
     * @param Input  $input
     * @param Output $output
     * @return mixed
     * @throws
     * @Mapping("exec")
     */
    public function exec(Input $input, Output $output){
        echo "exec\n";
        echo $input->getOpt("x")."\n";
        echo $input->getArg("name")."\n";
//        var_dump('test', $input, $output);
 //       $result = Task::deliver('sync', 'console', ['console'],Task::TYPE_ASYNC);
        $result = Task::deliver("timer","coroutineJob",["hello","world"]);
        var_dump($result);exit(1);
        Task::deliver("timer","coroutineJob",["p1","p2"],Task::TYPE_ASYNC);
    }

    /**
     * @param Input $input
     * @param Output $output
     * @Usage
     * shell:{command} [arguments] [options]
     * @Arguments
     *  time this is time
     * @Options
     *  -t,--t this is time
     * @Example
     * php swoft shell::cor time=2018-12-13 -t 2018年12月24
     * @Mapping()
     */
    public function  cor(Input $input,Output $output){
        $time = $input->getArg("time");
        $date = $input->getOpt("t");
        Coroutine::create(function(){
           for ($i=0;$i<1000;$i++){
               echo "coroutine:".$i."\n";
           }
        });
        for ($i=0;$i<1000;$i++){
            echo "master:".$i."-".Coroutine::id()."-".Coroutine::tid().PHP_EOL;
        }
    }

    /**
     * this task command
     *
     * @Usage
     * test:{command} [arguments] [options]
     *
     * @Options
     * -o,--o this is command option
     *
     * @Arguments
     * arg this is argument
     *
     * @Example
     * php swoft test:task
     *
     * @Mapping()
     */
    public function task()
    {
        $result = Task::deliver('sync', 'console', ['console']);
        var_dump($result);
    }

}