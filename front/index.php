<!DOCTYPE html>
<html>
<head>
<?php
    include_once "../admin/seo/seo.php";
    $query = seo::selectSeo();
    $item = [];
    $item = mysqli_fetch_assoc($query);
  ?>

  <script src="../js/jquery-3.6.0.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  
  <title><?php echo $item['title'] ?></title>
  <meta name="description" content="<?php echo $item['description'] ?>">
  <meta name="keywords" content="<?php echo $item['Keywords'] ?>">
  <meta name="author" content="<?php echo $item['author'] ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.owl-item{
  background-color: purple;
  text-align: center;
  height: 150px;
}

.owl-nav{
  text-align: center;
}

.owl-stage
{
  margin-top: 10px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
span{
  font-size: 50px;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active ar" href="#home">صفحه اصلی</a>
  <a class="ar" href="#news">تماس باما</a>
  <a class="ar" href="#contact">گالری</a>
  <a class="ar" href="#about">درباره ما</a>
  <a style="float: left;" href="">ورود</a>
    <a style="float: left;" href="">ثبت نام</a>
</div>


<div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>

<script>
  jQuery('.owl-carousel').owlCarousel({
    center:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    rtl: true,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})
</script>

</body>
</html>
