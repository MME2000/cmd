<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<?php
require_once 'seo.php';
$query = seo::selectAllSeo();
$item = [];
?>

<?php require_once '/opt/lampp/htdocs/PhpTest/cmd/admin/header.php' ?>
<h1>A seo Table</h1>

<table id="customers">
  <tr>
    <th>title</th>
    <th>description</th>
    <th>keywords</th>
    <th>author</th>
    <th>delete</th>
  </tr>
<?php while($item = mysqli_fetch_assoc($query)): ?>
  <tr>
    <td><?php echo $item['title'] ?></td>
    <td><?php echo $item['description'] ?></td>
    <td><?php echo $item['Keywords'] ?></td>
    <td><?php echo $item['author'] ?></td>
    <td>
      <form action="deleteSeo.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
        <input type="submit" value="delete">
      </form>
    </td>
  </tr>
<?php endwhile; ?>
  </table>

</body>
</html>


