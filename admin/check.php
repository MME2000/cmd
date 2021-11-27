<?php
session_start();
include_once 'loginAdmin.php';
$user_name = $_POST['user_name'];
$p = $_POST['password'];
$password = sha1($p);
$flag = 0;
$query = loginAdmin::selectUser();
$item = [];
while($item = mysqli_fetch_assoc($query))
{
    if($item['user_name'] == $user_name && $item['password'] == $password)
    {
        $flag = 1;
        $_SESSION['admin'] = $user_name;
        header("location:admin.php");
    }
} 

if($flag == 0)
{
    $_SESSION['wrong'] = "نام کاربری و کلمه عبور شما اشتباه می باشد";
    header('location:loginform.php');
}