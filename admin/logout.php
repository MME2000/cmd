<?php
session_start();
$_SESSION['wrong'] = null;
$_SESSION['admin'] = null;
header('location:loginform.php');