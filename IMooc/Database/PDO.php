<?php
/**
 * Created by PhpStorm.
 * User: blacksun
 * Date: 2016/7/13 0013
 * Time: 14:14
 */
namespace IMooc\Database;

use IMooc\IDatabase;

class PDO implements IDatabase{
    protected $conn;

    function connect($host,$user,$passwd,$dbname){
        $conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
        $this->conn = $conn;
    }

    function query($sql){
        return $this->conn->query($sql);
    }

    function close(){
        unset($this->conn);
    }
}