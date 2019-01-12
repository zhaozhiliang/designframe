<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午8:29
 */
namespace App\Decorator;

class Json{
    protected $controller;

    function beforeRequest($controller)
    {
        $this->controller = $controller;
    }

    function afterRequest($return_value)
    {
        if($_GET['app'] == 'json'){
            echo json_encode($return_value);
        }

    }
}