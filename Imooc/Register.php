<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午6:09
 */

namespace Imooc;


class Register
{
    protected static $objects = array();

    static function set($alias , $object)
    {

        self::$objects[$alias] = $object;
    }

    static function get($alias)
    {
        if(isset(self::$objects[$alias])){
            return self::$objects[$alias];
        }else {
            return false;
        }
    }

    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}