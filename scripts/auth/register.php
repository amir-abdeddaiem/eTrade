<?php
require ('../connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);
$sql = "INSERT INTO users (full_name, email, password)
VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../sign-in.html");
exit();
?>