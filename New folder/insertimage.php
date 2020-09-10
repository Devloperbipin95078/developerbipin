<?php require 'conn.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIInsert Image</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="filter" id="filter"><br>
        <input type="file" name="file" id="file">
        <button type="submit" name="submit">Upload</button>
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $filter = $_POST['filter'];
        $file = $_POST['file'];

        $insertquery = "INSERT INTO `image`( `filter`, `file`) VALUES ('$filter','$file')";
        $query = mysqli_query($con,$insertquery);

        if($query){
            ?>
            <script>
                alert("Data inserted");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Data not inserted");
            </script>
            <?php
        }
    }
    ?>
</body>
</html>