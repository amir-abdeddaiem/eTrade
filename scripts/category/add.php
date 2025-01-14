<?php 
require ('../connect.php');
$cat_name=$_POST['cat_name'];
$cat_image=$_POST['cat_img'];

$sql="INSERT INTO categories (cat_name,image) VALUES ('$cat_name','$cat_image')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  header("Location: ../../categories.php");

?>