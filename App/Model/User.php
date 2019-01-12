<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午9:08
 */
use Imooc\Factory;

class User extends \Imooc\Model
{
    function getInfo($id)
    {
        return Factory::getDatabase('slave')->query("select * from user where id=$id");
    }

    function create($user){
        $userid =1;
        $this->notify($user);
        return $userid;
    }
}