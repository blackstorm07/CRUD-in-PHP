<?php 
   include 'conn.php'; //FOR CONNECTION
?>
<?php 
$id = $_GET['id'];//HERE WE CAN GET ID FORM PASS IN URL
if (isset($_POST['submit'])) { //IN THIS IF WHEN USERS CLICK ON SUBMIT AT TIME CODE WILL BE EXECUTE AND USER REDIRECT FORM DISPLAY PAGE..
	$name = $_POST['firstname'];
    $pass = $_POST['Pass'];
    $coun = $_POST['country'];
    $query = mysqli_query($conn,"UPDATE `users` SET `name`='$name',`password`='$pass',`country`='$coun' WHERE id = $id");
    header('location:display.php');
}
  
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type = password]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: purple;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
  color: white;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<h2>Update Your Data</h2>
<div>
  <form action="#" method="Post">
  	<label for="fname">id</label>
  	<input type="text" id="fname" name="id" value="<?php echo $id ?>" readonly>

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Password</label>
    <input type="password" id="lname" name="Pass" placeholder="Your Password....." required>

    <label for="country">Country</label>
    <select id="country" name="country" required>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</body>
</html>
