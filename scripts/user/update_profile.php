<?php 
require ('../connect.php');
session_start();
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE users SET full_name = '$name', email = '$email' WHERE id = ".$_SESSION['user_id'];
if (mysqli_query($conn, $sql)) {
  $_SESSION['user_name'] = $name;
  $_SESSION['user_email'] = $email;
  header("Location: ../../my-account.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>