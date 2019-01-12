<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午8:26
 */

$config = array(
    'home' => array(
        'decorator' => array(
            'App\Decorator\Json'
        )
    ),
    'default' => 'hello world'
);

return $config;