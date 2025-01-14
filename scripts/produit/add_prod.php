<?php 
require ('../connect.php');
$prod_name=$_POST['prod_name'];
$prod_desc=$_POST['prod_desc'];
$prix=$_POST['prix'];
$cat_id=$_POST['cat_id'];
$scat_id=$_POST['scat_id'];
$prod_img = $_POST['prod_img'];

$sql="INSERT INTO `products`(`prod_name`, `scat_id`, `cat_id`, `description`, `prix`, `image`) VALUES ('$prod_name','$scat_id','$cat_id','$prod_desc','$prix','$prod_img')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  header("Location: ../../product.php");

?>
