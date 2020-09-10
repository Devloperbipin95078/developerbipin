<?php 
 $con = mysqli_connect("localhost","root","","Register");
 if($con){
     ?>
     <script>
     alert("connected");
     </script>
     <?php
 }else{
     ?>
     <script>
     alert(" not connected");
     </script>
     <?php
 }
?>