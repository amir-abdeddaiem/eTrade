<?php 
require ('../connect.php');
$cat_name=$_POST['scat_name'];
$cat_image=$_POST['scat_img'];
$cat_id=$_POST['cat_id'];

$sql="INSERT INTO scategories (scat_name,image,cat_id) VALUES ('$cat_name','$cat_image','$cat_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  header("Location: ../../scategorie.php");

?>