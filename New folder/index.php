<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  #demo{
    position:absolute;
    margin-left:20%;
    width:70%;
    height:700px;
    background:lightgreen;
  
    margin-top:40px;
  }
  img{
    width:100%;
    height:700px;
  }
  #button{
    display:inline-block;
  }
  </style>
  </head>
  <body>
  <div id="demo">
  
  </div>
  <div id="button">
    <ul>
    <li id="btn"> <a href="#demo"> click </a></li>
    <li id="btn1">ok</li>
    </ul>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    $("#btn").click(function() {
    document.getElementById('demo').innerHTML='<img src="img/HTML1.jpg">'
  
  });

  $("#btn1").click(function() {
    document.getElementById('demo').innerHTML='<img src="img/j.png">'
  
  });
  </script>
  </body>
</html>