<?php 
$server = "localhost";
$user = "root";
$password = "";
$db = "portfolio";

$con = mysqli_connect($server,$user,$password,$db);
if($con){
    ?>
    <script>
    alert("You are connected from database");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("You are not connected from database");
    </script>
    <?php
}
?>