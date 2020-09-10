<?php require 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Display</title>
    <style>
    table,th,td{
        text-align:center;
        border:2px solid gray;
    }
    .fa-pencil{
        color:green;
    }
    .fa{
        color:red;
    }
    </style>
</head>
<body>
     <table>
     <thead>
     <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Mobile</th>
     <th colspan="2">Operation</th>
     </tr>
     </thead>

     <tbody>
     
   <?php 
   $selectquery = "SELECT * FROM `application`";
   $query = mysqli_query($con,$selectquery);
   $num = mysqli_num_rows($query);
//    $res = mysqli_fetch_array($query);
  while ( $res = mysqli_fetch_assoc($query)) {
      ?>
     

     <tr>
     <td><?php echo $res['id']; ?></td>
     <td><?php echo $res['name']; ?></td>
     <td><?php echo $res['email']; ?></td>
     <td><?php echo $res['mobile']; ?></td>
     <td> <a href="Update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
     <td> <a href="Delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"> <i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
    
     </tr>
    

  
  
   
<?php } ?>
</tbody>
     </table>
 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>