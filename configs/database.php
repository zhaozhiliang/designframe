<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午5:05
 */

return array(
    'master'=> array(
        'type'=>'MySQL',
        'host'=>'192.168.199.129',
        'user'=> 'work',
        'password'=> '123qwe',
        'dbname' => 'test'
    ),
    'slave' => array(
        'slave1' => array(
            'type'=>'MySQL',
            'host'=>'192.168.199.129',
            'user'=> 'work',
            'password'=> '123qwe',
            'dbname' => 'test'
        ),
        'slave2' => array(
            'type'=>'MySQL',
            'host'=>'192.168.199.129',
            'user'=> 'work',
            'password'=> '123qwe',
            'dbname' => 'test'
        ),
    )

);