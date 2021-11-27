<?php

include_once "DataBase.php";

class loginAdmin
{
    private static $con;

    public static function dbConnect()
    {
        self::$con = DataBase::connect();
        mysqli_set_charset(self::$con,'utf8');
    }

    public static function selectUser()
    {
        self::dbConnect();
        $query = mysqli_query(self::$con,"select * from login");
        return $query;
    }

    public static function insertUser($username,$password)
    {
        self::dbConnect();
        mysqli_query(self::$con,"insert into login (user_name,password) VALUES ('$username','$password')");
    }
}