<?php 

require_once 'slider.php';

$image = $_FILES['image'];
$caption = $_POST['caption'];
$link = $_POST['link'];

slider::insert($image,$caption,$link);