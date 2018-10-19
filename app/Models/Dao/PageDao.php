<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/10/19
 * Time: 15:19
 */

namespace App\Models\Dao;

use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;
use App\Models\Entity\Pages;

/**
 *
 * @Bean()
 * @uses      PageDao
 * @version   2017年04月25日
 * @author    owlet <owlet@gmail.com>
 * @copyright Copyright 2010-2018 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class PageDao
{
    /**
     * @param $id
     * @return mixed
     */
    public function getOne($id){
        return Pages::findOne(["id"=>$id])->getResult();
    }

    /**
     * @param $where
     * @return mixed
     */
    public function getList($where){
        return Pages::findAll($where,["limit"=>20])->getResult();
    }

}