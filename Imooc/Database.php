<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午5:58
 */

namespace Imooc;

//单例模式
class Database
{
    protected static $db;
    private function __construct()
    {
    }

    static function getInstance($dbType = 'mysqli')
    {
//        if(self::$db){
//            return self::$db;
//        } else {
//           self::$db = new self();
//           return self::$db;
//        }

        if(self::$db){
            return self::$db;
        } else {
            if($dbType == 'mysqli'){
                self::$db = new \Imooc\Database\MySQLi();

            }else if($dbType == 'pdo'){
                self::$db = new \Imooc\Database\PDO();
            }else {
                self::$db = new \Imooc\Database\MySQL();
            }
            self::$db->connect("192.168.199.129","work", "123qwe", "test");

            return self::$db;
        }
    }

    function where($where)
    {
        return $this;
    }


}