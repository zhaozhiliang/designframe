<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 上午1:31
 */
namespace Imooc;

class ColorDrawDecorator implements DrawDecorator
{
    protected $color;
    function __construct($color = 'red')
    {
        $this->color = $color;
    }

    function beforeDraw()
    {
        echo "<div style='color:{$this->color};'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}