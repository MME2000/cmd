<?php

require_once '/opt/lampp/htdocs/PhpTest/cmd/admin/DataBase.php';

class slider
{
    private static $con;

    public static function connection()
    {
        self::$con = DataBase::connect();
        mysqli_set_charset(self::$con,'utf8');
    }

    public static function insert($image,$caption,$link)
    {
        self::connection();
        $upload = 1;
        $image_name = $image['name'];
        $directory = '/opt/lampp/htdocs/PhpTest/cmd/images/slider/';
        $targetFile = $directory . basename($image_name);
        $fileType = pathinfo($targetFile,PATHINFO_EXTENSION);
        if($fileType !== 'jpg' && $fileType !== 'png' && $fileType !== 'git'){
            $upload = 0;
            echo 'there is not picture';
        }
        if($image['size'] > 5000000){
            $upload = 0;
            echo 'this is a big';
        }
        if($upload == 1){
            if(move_uploaded_file($image['tmp_name'],$targetFile)){
                echo 'done';
            }
        }   
        mysqli_query(self::$con,"insert into slider (image,caption,link) VALUE ('$image','$caption','$link')");
    }
}