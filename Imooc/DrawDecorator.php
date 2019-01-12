<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 上午1:14
 */

namespace Imooc;


interface DrawDecorator
{
    function beforeDraw();
    function afterDraw();
}