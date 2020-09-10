<?php  require 'connect.php';
$id = $_GET['id'];

$deletequery = "DELETE FROM `application` WHERE id = {$id}";
$query = mysqli_query($con,$deletequery);

header('location:Display.php');

?>
