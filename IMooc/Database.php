<?php
/**
 * Created by PhpStorm.
 * User: blacksun
 * Date: 2016/7/13 0013
 * Time: 13:09
 */
namespace IMooc;


class Database{
    private $db;

    private function __construct(){

    }

    static function getInstance(){
        if(self::$db){
            return self::$db;
        }
        else{
            self::$db = new self();
            return self::$db;
        }

    }
    function where($where){
        return $this;
    }

    function order($order){
        return $this;
    }

    function limit($limit){
        return $this;
    }
}