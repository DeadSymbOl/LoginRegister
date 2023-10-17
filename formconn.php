<?php

include('conn.php');
session_start();

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * from accounts where email= '$email' and password = '$pass'";

$result = $conn -> query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

  if ($count ==1) {
    header("Location: home.php");
    echo '<script>alert("User Log in Successfull")</script>';
  }else{
    
   echo '<script>alert("User Log in Failed")</script>';

  }

?>