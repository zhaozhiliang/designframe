<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 上午1:38
 */

namespace Imooc;


class SizeDrawDecorator implements DrawDecorator
{
    protected $size;
    function __construct($size = '14px')
    {
        $this->size = $size;
    }

    function beforeDraw()
    {
        echo "<div style='font-size:{$this->size};'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}