<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/13 0013
 * Time: 12:52
 */
namespace IMooc;

class Loader{

    static function autoload($class){
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}