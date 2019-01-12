<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午10:53
 */

namespace Imooc;


class User
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;
    public $serial_no;

    protected $db;
    function __construct($id)
    {
        $this->db = new \Imooc\Database\MySQLi();
        $this->db->connect('192.168.199.129', 'work','123qwe', 'test');
        $res = $this->db->query("select * from user where id={$id} limit 1");
        $data = $res->fetch_assoc();

        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
        $this->serial_no = $data['serial_no'];
    }

    function __destruct()
    {
        $ret  = $this->db->query("update user set name='{$this->name}', mobile='{$this->mobile}', regtime='{$this->regtime}'
       ,serial_no='{$this->serial_no}' where id={$this->id}");
    }
}