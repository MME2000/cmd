<?php

class DataBase
{
    private static $con;
    public static function connect()
    {
        self::$con = mysqli_connect('localhost','root','','cmd');
        return self::$con;
    }
}