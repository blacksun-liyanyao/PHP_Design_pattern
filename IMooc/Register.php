<?php
/**
 * Created by PhpStorm.
 * User: blacksun
 * Date: 2016/7/13 0013
 * Time: 14:06
 */
namespace IMooc;

class Register{
    protected static $objects;

    static function set($alias,$object){
        self::$objects[$alias] = $object;
    }

    static function get($name){
        return self::$objects[$name];
    }
    static function _unset($alias){
        unset(self::$objects[$alias]);
    }
}