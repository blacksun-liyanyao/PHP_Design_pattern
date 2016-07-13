<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/13 0013
 * Time: 14:47
 */
namespace IMooc;

interface IDatabase{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}