<?php

session_start();
include ('conn.php');
  
if(isset($_POST['register'])){
 $firstname = $_POST['Fname'];
  $lastname  = $_POST['Lname'];
  $email=$_POST['email'];
  $str  = $_POST['pass'];
  $hash_pass = md5($str);
  
if (md5($str)){

  $sql = "INSERT INTO accounts(firstname,lastname,email,password) values ('$firstname','$lastname','$email','$hash_pass')";
  $result = mysqli_query($conn,$sql);

 
header("Location: login.php");
echo '<script>alert("User Registration Successfull")</script>';
}
    else {
echo '<script>alert("User Registration Failed") </script>';
    }

}

?>