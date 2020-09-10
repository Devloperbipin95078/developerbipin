<?php require 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

    <?php
     
    $ids = $_GET['id'];
$showquery = "SELECT * FROM `application` WHERE id = {$ids}";
$showdata = mysqli_query($con,$showquery);
$arraydata = mysqli_fetch_assoc($showdata);
echo $arraydata['mobile'];


   if(isset($_POST['submit'])){

    $idupdate = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // $insertquery = "INSERT INTO `application`(`name`, `email`, `mobile`) VALUES ('$name','$email','$mobile')";
       
  
  $updatequery = "UPDATE `application` SET `id`='$id',`name`='$name',`email`='$email',`mobile`='$mobile' WHERE id = $idupdate";
  $query = mysqli_query($con,$updatequery);
        if($query){
            ?>
            <script>
            alert("Updated");
            </script>
            <?php
        }else{
               ?>
                <script>
                alert(" Not Updated");
                </script>
                <?php
        }
   }
   ?>
    <input type="text" name="name" id="" placeholder="Name" value="<?php echo $arraydata['name']; ?>">
    <input type="email" name="email" id="" placeholder="Email"value="<?php echo $arraydata['email']; ?>">
    <input type="tel" name="mobile" id="" placeholder="Mobile"value="<?php echo $arraydata['mobile']; ?>">
    <input type="submit" value="Update" name="submit">
    </form>
 <h1><?php echo $arraydata['email']; ?></h1>
   
 
</body>
</html>