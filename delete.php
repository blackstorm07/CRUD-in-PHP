<?php 
   include 'conn.php';//FOR CONNECTION
?>
<?php 
    $id = $_GET['id'];//HERE WE CAN GET ID FORM PASS IN URL
    $query = mysqli_query($conn,"DELETE FROM `users` WHERE id = $id");//DELETE QUERY
    header('location:display.php');//REDIRECT DISPLAY PAGE
?>