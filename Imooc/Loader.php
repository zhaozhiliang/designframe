<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午4:39
 */

namespace Imooc;


class Loader
{
    static function autoload($class)
    {
        //var_dump($class);
        //BASEDIR.'/'.$class;
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';

    }
}