<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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

<?php require_once '../header.php'; ?>
<h1 style="text-align: center;">slider</h1>
<div class="container">
  <form action="insertSlider.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">image</label>
    </div>
    <div class="col-75">
      <input type="file" id="fname" name="image">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">caption</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="caption" placeholder="Your caption..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">link</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="link" placeholder="Your link..">
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
