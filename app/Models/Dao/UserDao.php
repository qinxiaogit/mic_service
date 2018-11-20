<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Models\Dao;

use Swoft\Bean\Annotation\Bean;

/**
 *
 * @Bean()
 * @uses      UserDao
 * @version   2017年04月25日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class UserDao
{
    /**
     * @return array
     */
    public function getUserInfo()
    {
        return [
            'uid' => 666,
            'name' => 'stelin'
        ];
    }

    /**
     * @param string $username
     * @return array
     */
    public function getUserByUsername(string $username){
        return [
            "a"=>"xiaoming",
            'password'=>11222,
            'username'=>$username
        ];
    }
}
