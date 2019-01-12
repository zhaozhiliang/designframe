<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午8:09
 */

namespace Imooc;


class FemaleUserStrategy implements UserStrategy
{

    function showAd()
    {
        echo "2014新款女装广告";
    }

    function showCategory()
    {
        echo "女装";
    }
}