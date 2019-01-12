<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午4:34
 */
namespace App\Controller\Home;

use Imooc\Factory;

class Index
{
    static function test()
    {
        echo __METHOD__;
    }

    function index()
    {
        $model = Factory::getModel('User');
        $userid = $model->create(array('name'=> 'rango', 'mobile'=>'13146105123'));
        return array('userid'=> $userid, 'name' => 'rango');
    }
}