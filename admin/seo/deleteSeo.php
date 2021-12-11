<?php 
require_once 'seo.php';
$id = $_POST['id'];
seo::deleteSeo($id);
header('location:allseo.php');
