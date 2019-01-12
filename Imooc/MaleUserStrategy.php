<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午8:11
 */

namespace Imooc;


class MaleUserStrategy implements UserStrategy
{

    function showAd()
    {
        echo "男装广告";
    }

    function showCategory()
    {
        echo "男装";
    }
}