<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午9:26
 */

$config = array(
    'user' => array(
        'observer' => array(
            'App\Observer\UserAdd1',
            'App\Observer\UserAdd2',
            'App\Observer\UserAdd3',
            'App\Observer\UserAdd4'
        )
    )
);

return $config;