<?php
/**
 * Created by PhpStorm.
 * User: blacksun
 * Date: 2016/7/13 0013
 * Time: 13:56
 */
namespace IMooc;
class Factory{
    static function createDataBase(){
        $db = Database::getInstance();
        Register::set('db1',$db);
        return $db;
    }
}