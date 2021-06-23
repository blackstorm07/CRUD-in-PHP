<?php 
     $conn = mysqli_connect('localhost','root','','ci');
     //IN CONNECTION LOCALHOST IS YOUR SERVER NAME
     //THAT WAY ROOT IS YOUR USERNAME
     //HERE MY DATABASE PASSWORD IS BLANK ENTER YOUR DATABASE PASSWORD
     //AND CI IS MY DATABASE NAME
     if (!$conn) {
            echo "Fail";
     }
?>