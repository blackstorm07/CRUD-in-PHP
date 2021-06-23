<?php 
  include('conn.php');
  //HERE INCLUDE A CONN.PHP FILE FOR DATABASE CONNECTION
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
<div>
  <form action="#" method="Post">
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
<?php 
   if(isset($_POST['submit'])){
    //ISSET MEANS WHEN USER CLICK ON SUBMIT THEN CODE WILL BE EXECUTE
    $name = $_POST['firstname'];//WE TAKE A INPUT DATA FORM USERS
    $pass = $_POST['Pass'];//WE TAKE A INPUT DATA FORM USERS
    $coun = $_POST['country'];//WE TAKE A INPUT DATA FORM USERS
    $query = mysqli_query($conn,"INSERT INTO `users`(`name`, `password`, `country`) VALUES ('$name','$pass','$coun')");//OUR INSERT QUERY
    if ($query) {
      header('location:display.php');
      //WHEN QUERY IS SUCCESSFULLY EXECUTE THEN AUTOMETICALLY REDIRECT FORM DISPLAY PAGE.
    }
    else {
     echo "Failed To Run Query ";
    }
   }
   ?> 
