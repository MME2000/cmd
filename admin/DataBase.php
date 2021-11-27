<?php

class DataBase
{
    private static $con;
    public static function connect()
    {
        self::$con = mysqli_connect('localhost','root','','cmd');
    }
    public static function  rconnect()
    {
        return self::$con;
    }
}