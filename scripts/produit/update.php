<?php 
require ('../connect.php');
$id = $_GET['id'];
$prod_name=$_POST['prod_name'];
$prod_desc=$_POST['prod_desc'];
$prix=$_POST['prix'];
$cat_id=$_POST['cat_id'];
$scat_id=$_POST['scat_id'];
$prod_img = $_POST['prod_img'];

$sql="UPDATE `products` SET `prod_name` ='$prod_name', `scat_id` = '$scat_id', `cat_id`='$cat_id', `description`='$prod_desc', `prix`='$prix', `image`='$prod_img' WHERE `products`.`id`='$id'";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  header("Location: ../../product.php");

?>
