<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/10/18
 * Time: 17:18
 */

namespace App\Models\Logic;

use App\Models\Dao\PageDao;
use App\Models\Data\PageData;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;

/**
 * @Bean()
 * 文章逻辑层
 * @uses PageLogic
 * Class PageLogic
 * @package App\Models\Logic
 * @version   2018年10月18日
 * @author    owlet<qinxiaolove@gmail.com>
 * @copyright Copyright 2010-2018 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class PageLogic
{
    /**
     * @Inject()
     * @var PageData
     */
    private $pageData ;

    /**
     * @param $id
     * @return array
     */
    public function getOne($id){
         return $this->pageData->getOne($id);
    }
    /**
     * @param $status
     * @return  array
     */
    public function getList($status){
        $where = [
            "status"=>$status
        ];
        $results  = $this->pageData->getList($where);
        $list = [];
        foreach ($results as $item){
            $list[] = [
                "title"=>$item["title"],
                "type"=>"测试",
                "url"=>"/blog/".$item["id"]
            ];
        }
        return $list;
    }
}