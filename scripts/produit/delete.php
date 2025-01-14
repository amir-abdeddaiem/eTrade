<?php 
require ('../connect.php');
$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  header("Location: ../../product.php");


?>