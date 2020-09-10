<?php require 'connection.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Teach Article</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h2 class="text-light bg-info p-2 text-uppercase text-center">web devlopement course in Hindi [Free of cost] </h2>
      <div id="container_fluid">
      <div class="row">
      <div class="col-lg-3">
      <h4 class="text-light bg-danger text-uppercase text-center">Subject List</h4>
      <?php 
      $ids = $_GET['id'];
$sql ="SELECT * FROM subject WHERE id = {$ids}";
  $result = $con->query($sql);
  while($row = $result->fetch_assoc()) {
   
    
?>
<li class="list-group-item">
       <div class="form-check">
         <label class="form-check-label">
           <input type="button" name="read" id="Screensize" class="form-check-input product_check text-danger" value="<?= $row['Chapter'];?>" href="#res?=<?php echo $row['id'];?>">
           <?= $row['Chapter'];?>
         </label>
       </div>
     </li>

      
   
  
   
    <?php } ?>
    </div>
<div class="col-lg-9">
     
      <h2 class="bg-danger text-center text-light">पढ़ो और सीखो </h2>
      <div id="res">
      <?php 
    
    
  $sql ="SELECT * FROM `subject`";
  $result = $con->query($sql);
  $row = $result->fetch_array();
  if(isset($_POST['read'])){
    $id = $_POST['id'];
    $cn = $_POST['Chapter_Name'];
    $file = $_POST['file'];
  }
  while($row) {
   
    ?>
   
      <h2><?php echo $row['Chapter']; ?></h2>
    <img src="img/<?php echo $row['file']; ?>" alt="">
    
    
      </div>
      <?php } ?>
      </div>
    
      </div>
      </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    $("#result").click(function(){
  document.getElementById("res").innerHTML = "Hello";
    });
    alert("Hello");
    </script>
    
  </body>
</html>