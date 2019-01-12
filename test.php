<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午3:07
 */
spl_autoload_register('autoload1');
spl_autoload_register('autoload2');

Test1::test();
Test2::test();

////php 7.3 已经被废弃了
////Deprecated: __autoload() is deprecated, use spl_autoload_register() instead in /mnt/hgfs/work_www/designframe/test.php on line 14
//function __autoload($class)
//{
//    require_once __DIR__.'/'.$class.'.php';
//}

function autoload1($class){
    require_once __DIR__.'/'.$class.'.php';
}

function autoload2($class){
    require_once __DIR__.'/'.$class.'.php';
}