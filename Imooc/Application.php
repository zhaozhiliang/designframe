<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午5:52
 */

namespace Imooc;


class Application
{
    protected static $app;
    public $config;  //config 对象
    private function __construct()
    {
        $this->config = new Config(BASEDIR.'/configs');
    }

    static public function getInstance(){

        if(isset(self::$app)){
            return self::$app;
        }else{
            self::$app = new self();
            return self::$app;
        }

    }
}