<?php include 'connect.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="name" id="" placeholder="Name" value="">
    <input type="email" name="email" id="" placeholder="Email"value="">
    <input type="tel" name="mobile" id="" placeholder="Mobile"value="">
    <input type="submit" value="submit" name="submit"value="">
    </form>

    <?php 

   if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        $insertquery = "INSERT INTO `application`(`name`, `email`, `mobile`) VALUES ('$name','$email','$mobile')";
        $query = mysqli_query($con,$insertquery);

        if($query){
            ?>
            <script>
            alert("Inserted");
            </script>
            <?php
        }else{
               ?>
                <script>
                alert(" Not Inserted");
                </script>
                <?php
        }
   }
   ?>
 
</body>
</html>