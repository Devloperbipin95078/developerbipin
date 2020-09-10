<?php
$server = "localhost";
$username = "root";
$password = "";
$db= "chapter";

$con = mysqli_connect($server,$username,$password,$db);
 if($con){
     ?>
     <script>
     alert("Connected");
     </script>
     <?php
 }else{
    ?>
    <script>
    alert(" Do not Connected");
    </script>
    <?php
 }
?>