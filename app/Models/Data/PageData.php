<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/10/19
 * Time: 15:20
 */
namespace App\Models\Data;

use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;
use App\Models\Dao\PageDao;

/**
 *
 * @Bean()
 * @uses     PageData
 * @version   2017年04月25日
 * @author    owlet <owlet@gmail.com>
 * @copyright Copyright 2010-2018 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class PageData{
    /**
     * @Inject()
     * @var \App\Models\Dao\PageDao
     */
    public $pageDao;

    /**
     * 获取新闻详情
     * @param $id
     * @return mixed
     */
    public function getOne($id){
        return $this->pageDao->getOne($id);
    }
    /**
     * 获取新闻列表
     * @param $where
     * @return array
     */
    public function getList($where){
        return $this->pageDao->getList($where);
    }
}