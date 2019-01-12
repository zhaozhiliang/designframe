<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午8:29
 */
class Login
{
    function beforeRequest($controller)
    {
        session_start();
        if(empty($_SESSION['isLogin']))
        {
            header('Location:/login/index');
            exit;
        }
    }

    function afterRequest($return_value)
    {

    }
}