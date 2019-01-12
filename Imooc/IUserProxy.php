<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午4:05
 */

namespace Imooc;


interface IUserProxy
{
    function getUserName($id);
    function setUserName($id, $name);
}