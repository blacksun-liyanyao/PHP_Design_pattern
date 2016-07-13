<?php
/**
 * Created by PhpStorm.
 * User: blacksun
 * Date: 2016/7/13 0013
 * Time: 12:47
 */
namespace IMooc;

class Object{
    protected $array = array();

    function __set($key,$value){
        var_dump(__METHOD__);
        $this->array[$key] = $value;
    }

    function __get($key){
        var_dump(__METHOD__);
        return $this->array[$key];
    }

    function __call($func,$param){
        var_dump($func,$param);
        return 'magic function\n';
    }
}