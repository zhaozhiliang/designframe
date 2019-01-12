<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午6:50
 */
namespace Imooc\Database;

class MySQLi implements \Imooc\IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return mysqli_query($this->conn,$sql);
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}