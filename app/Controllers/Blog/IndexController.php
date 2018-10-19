<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/10/18
 * Time: 14:53
 */

namespace App\Controllers\Blog;

use App\Models\Logic\IndexLogic;
use App\Models\Logic\PageLogic;
use Swoft\App;
use Swoft\Bean\Annotation\Inject;
use Swoft\Core\Application;
use Swoft\Core\Coroutine;
use Swoft\Http\Message\Server\Request;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\Task\Task;
use Swoft\View\Bean\Annotation\View;

/**
 * 控制器demo
 * @Controller(prefix="/blog")
 */
class IndexController
{
    /**
     * 别名注入.
     *
     * @Inject("httpRouter")
     *
     * @var \Swoft\Http\Server\Router\HandlerMapping
     */
    private $router;

    /**
     * @Inject()
     * @var \App\Models\Logic\UserLogic
     */
    private $logic;

    /**
     * @Inject()
     * @var PageLogic
     */
    private $pageLogic;

    /**
     * 定义一个route,支持get和post方式，处理uri=/blog/
     *
     * @RequestMapping(route=" ", method={RequestMethod::GET, RequestMethod::POST})
     *
     * @param Request $request
     * @View(template="blog/index",layout="layouts/master.php")
     *
     * @return array
     */
    public function index(Request $request){
        $layoutFile = 'layouts/master.php';
        $list = $this->pageLogic->getList("active");
//        $list = [
//            ["title"=>"测试文章","type"=>"php","url"=>"/blog/1"],
//            ["title"=>"测试文章","type"=>"go","url"=>"/blog/2"],
//        ];
        return compact("layoutFile","list");
    }

    /**
     * @RequestMapping(route="{id}", method={RequestMethod::GET, RequestMethod::POST})
     * @param Request $request
     * @return array
     */
    public function show(Request $request,$id){
        return $this->pageLogic->getOne(intval($id));
    }

}