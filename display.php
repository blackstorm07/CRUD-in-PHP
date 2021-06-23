<?php 
   include 'conn.php';//FOR CONNECTION FILE
?>
<?php 
    if ($conn) {
         $query = mysqli_query($conn,"SELECT `id`, `name`, `password`, `country` FROM `users`");
         //DISPLAY QUREY
    }
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Users Data</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Password</th>
    <th>Country</th>
    <th>Action</th>
  </tr>
  <?php 
    while ($raw = mysqli_fetch_array($query)) {
        //HERE WE OPEN WHILE LOOP FOR FETCH DATA FORM DATABASE
  ?>
  <tr>
    <td><?php echo $raw['id'] ?></td>
    <td><?php echo $raw['name'] ?></td>
    <td><?php echo $raw['password'] ?></td>
    <td><?php echo $raw['country'] ?></td>
    <td><a href="delete.php?id=<?php echo $raw['id'] ?>">Delete</a>
        <a href="update.php?id=<?php echo $raw['id'] ?>">Update</a>
    </td>
  </tr>
  <?php 
    }//HERE WE CLOSE A WHILE LOOP BECAUSE OF WE DON'T KNOW HOW MANY ROWS IN DATABASE...
  ?>
</table>
</body>
</html>
