<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/9/21
 * Time: 11:05
 */

namespace App\Lib;
use Swoft\Core\ResultInterface;

interface MiaoInterface
{
    /**
     * @method ResultInterface deferGetMiao(string $id)
     * @param string $id
     * @return mixed
     */
    public function getMiao(string $id);

    /**
     * @method ResultInterface defAddMiao(string $name,string $phone,string $head)
     * @param string $name
     * @param string $phone
     * @param string $head
     * @return mixed
     */
    public function addMiao(string $name,string $phone,string $head);

    /**
     * @method ResultInterface defPage(string $status="ACTIVE")
     * @param string $status
     * @return mixed
     */
    public function pages(string $status="ACTIVE");
}