<?php 
require ('../connect.php');
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['full_name'];
    $_SESSION['user_email'] = $row['email'];
    $_SESSION['user_role'] = $row['role'];

    header("Location: ../../index.php");
exit();
  }
} else {
    header("Location: ../../sign-in.html");
    exit();
}