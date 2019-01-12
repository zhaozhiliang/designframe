<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午6:50
 */
namespace Imooc\Database;
use \Imooc\IDatabase;
class PDO implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql://host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}