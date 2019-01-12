<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午11:42
 */

namespace Imooc;


abstract class EventGenerator
{
    private $observers = array();
    function addObserver(Observer $observer){
        $this->observers[] = $observer;
    }
    function notify(){
        foreach($this->observers as $observer)
        {
            $observer->update();
        }
    }

}