<?php

require_once 'seo.php';

$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$keywords = $_POST['keywords'];
seo::insertSeo($title,$author,$description,$keywords);
header('location:../adminPage.php');