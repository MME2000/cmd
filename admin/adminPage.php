<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
  background-color: #000;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 10%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>
<body>

<div class="topnav">
  <a class="ar" href="#about">تنظیمات</a>
  <a class="ar" href="#about">اسلایدر</a>
  <a style="float: left;" href="logout.php">خروج</a>
    <a style="float: left;" href="../front/index.php">نمایش وبسایت</a>
</div>

<div class="container">
  <form action="../admin/seo/insertSeo.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname">title</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="title" placeholder="Your title..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">author</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="author" placeholder="Your author..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">description</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="description" placeholder="Write description..." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">keywords</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="keywords" placeholder="Write keywords..." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div style="text-align: center;" class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>
