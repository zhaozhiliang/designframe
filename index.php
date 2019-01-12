<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/11
 * Time: 下午4:31
 */
define('BASEDIR', __DIR__);
include BASEDIR.'/Imooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

//不能使用7.2 Object 名字
//Imooc\Object::test();
App\Controller\Home\Index::test();

//$db = IMooc\Database::getInstance();
//var_dump(function_exists('mysql_connect'));  //bool(false)

//$db = new IMooc\Database\MySQL();
//$db->connect('192.168.199.129','work', '123qwe', 'test');
//$db = new IMooc\Database\PDO();
//$db->connect('192.168.199.129', 'work', '123qwe', 'test');
//$db->query("select * from goods");

//class Page
//{
//    protected $strategy;
//    function index()
//    {
//        echo "AD:";
//        $this->strategy->showAd();
//        echo "<br/>";
//        echo "Category:";
//        $this->strategy->showCategory();
//        echo "<br/>";
//    }
//
//    function setStrategy(\Imooc\UserStrategy $strategy)
//    {
//        $this->strategy = $strategy;
//    }
//}
//
//$page = new Page;
//if(isset($_GET['female'])){
//    $strategy = new \Imooc\FemaleUserStrategy();
//}else {
//    $strategy = new \Imooc\MaleUserStrategy();
//}
//
//$page->setStrategy($strategy);
//$page->index();

//$user = new \Imooc\User(1);
//var_dump($user->id, $user->mobile, $user->name, $user->regtime);
//$user->mobile = '13146105129';
//$user->name = 'lisi';
//$user->regtime = date('Y-m-d H:i:s');

//class Page
//{
//    function index()
//    {
//        //$user = new Imooc\User(2);
//        $user = Imooc\Factory::getUser(2);
//        $user->name = 'rango';
//        $this->test($user);
//        echo "ok";
//    }
//
//    function test($user)
//    {
//        //$user = new Imooc\User(2);
//        //$user = Imooc\Factory::getUser(2);
//        $user->mobile = '13146105125';
//    }
//}
//
//$page = new Page();
//$page->index();
//
//class Event extends \Imooc\EventGenerator
//{
//    function trigger()
//    {
////        echo "Event<br/>\n";
////
////        //update
////        echo "逻辑1<br/>\n";
////
////        echo "逻辑2<br/>\n";
////        echo "逻辑...n<br/>\n";
//        $this->notify();
//    }
//}
//
//class Observer1 implements \Imooc\Observer
//{
//
//    function update($event_info = null)
//    {
//        echo "逻辑1<br/>\n";
//    }
//}
//
//class Observer2 implements \Imooc\Observer
//{
//
//    function update($event_info = null)
//    {
//        echo "逻辑2<br/>\n";
//    }
//}
//
//$event = new Event;
//$event->addObserver(new Observer1);
//$event->addObserver(new Observer2);
//$event->trigger();
//
////原型模式
//$canvas1 = new Imooc\Canvas();
//$canvas1->init();
//$canvas1->rect(3, 6, 4,12);
//$canvas1->draw();
//
//$prototype = new Imooc\Canvas();
//$prototype->init();
//$canvas1->rect(3, 6, 4, 12);
//$canvas1->draw();
//echo "==================<br/>\n";
//
//$canvas2 = clone $prototype;
//$canvas2->rect(1,3, 2, 6);  //和直接new 相比省掉 了init
//$canvas2->draw();
//
////装饰器模式
//class Canvas2 extends Imooc\Canvas
//{
//    function draw()
//    {
//        echo "<div style='color:red;'>";
//        parent::draw();
//        echo "</div>";
//    }
//}
//$canvas3 = new Canvas2();
//$canvas3->init();
//$canvas3->rect(3, 6, 4, 12);
//$canvas3->draw();
//
////颜色装饰器
//echo '=============decorator:';
//
//$canvas4 = new Imooc\Canvas();
//$canvas4->init();
//$canvas4->addDecorator(new \Imooc\ColorDrawDecorator('green'));
//$canvas4->addDecorator(new \Imooc\SizeDrawDecorator('22px'));
//$canvas4->rect(3, 6, 4, 12);
//$canvas4->draw();

//迭代器模式
$users = new \Imooc\AllUser();
$users->current();
foreach($users as $user)
{
    var_dump($user->id, $user->name, "<br/>");
    $user->serial_no = rand(10000, 90000);
}


//代理模式
//$db = \Imooc\Factory::getDatabase('slave');
//$info = $db->query("select name from user where id=1 limit 1");
//
//$db1 = \Imooc\Factory::getDatabase('master');
//$db->query("update user name='lili' where id = 1 limit 1");
//
//$proxy = new \Imooc\Proxy();
//$proxy->getUserName($id);
//$proxy->setUserName($id, $proxy);

//PHP 中使用ArrayAccess实现配置文件的加载
//$config = new \Imooc\Config(__DIR__.'/configs');
//var_dump($config['database']);   //从文件系统 database.php 加载 配置
//var_dump($config['redis']);

//从配置中生成数据库
$db = \Imooc\Factory::getDatabase();
$query = $db->query("select name from user where id=1 limit 1");
$info = $query->fetch_all();
var_dump($info);
