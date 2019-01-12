<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 上午2:39
 */
namespace Imooc;
interface IDatabase
{
    function connect($host, $user, $passwd, $dbname);
    function query($sql);
    function close();
    //fetch 方法的统一 todo;

}