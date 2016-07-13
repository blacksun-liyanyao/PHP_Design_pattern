<?php
/**
 * Created by PhpStorm.
 * User: blacksun
 * Date: 2016/7/13 0013
 * Time: 12:46
 */
define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register("\\IMooc\\Loader::autoload");
//IMooc\Object::test();
//App\Controller\Home\Index::test();
//$db = new IMooc\Database();
//$obj = new IMooc\Object();
//$obj->title = 'title';
//echo $obj->title;
//echo $obj->test('hello',123);
//IMooc\Register::get('db1');
$db = new IMooc\Database\MySQL();
$db->connect('phpmyadmin.com','root','root','test');
$reslut = $db->query('select * from test');
$row = mysql_fetch_array($reslut);
var_dump($row);
$db->close();