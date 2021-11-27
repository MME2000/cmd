<?php

session_start();
if(isset($_SESSION['admin']))
{
    header('location:admin.php');
}
if(isset($_SESSION['wrong']))
{
    echo $_SESSION['wrong'];
}

?>


<form action="check.php" method="POST">
    <input type="text" name="user_name">
    <input type="password" name="password">
    <input type="submit">
</form>