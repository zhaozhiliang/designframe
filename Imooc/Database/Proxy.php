<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午9:45
 */

namespace Imooc\Database;


use Imooc\Factory;
use Imooc\IDatabase;

class Proxy implements IDatabase
{
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        if(substr($sql, 0, 6) == 'select')
        {
            echo "读操作:$sql<br/>";
            Factory::getDatabase('slave')->query($sql);
        }else{
            echo "写操作：$sql<br/>";
            Factory::getDatabase('master')->query($sql);
        }
    }

    function close()
    {
        // TODO: Implement close() method.
    }
}