<?php
include "Connect.php";

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$mobile = filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$pass = sha1($password);

if (isset($_POST['submit']))
 {
        @$sql="INSERT INTO `crud` (`name`, `email`, `mobile`, `password`) VALUES ('$name', '$email', '$mobile', '$pass')";
        if (@$stmt = $conn->query($sql))
        {
          echo $conn->error;       
        }
      //  header("Location: display.php");
 }
 
?>



