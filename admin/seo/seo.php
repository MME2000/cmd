<?php

require_once '/opt/lampp/htdocs/PhpTest/cmd/admin/DataBase.php';

class seo
{
    private static $con;

    public static function connection()
    {
        self::$con = DataBase::connect();
        mysqli_set_charset(self::$con,'utf8');
    }

    public static function insertSeo($title,$author,$description,$keywords)
    {
        self::connection();
        mysqli_query(self::$con,"insert into seo (title ,author,description,keywords)VALUES('$title','$author','$description','$keywords')");
    }

    public static function selectSeo()
    {
        self::connection();
        $query = mysqli_query(self::$con,"select * from seo ORDER by 'id' DESC limit 1 offset 0");
        return $query;
    }
}