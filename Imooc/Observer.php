<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午11:44
 */

namespace Imooc;


interface Observer
{
    function  update($event_info = null);
}