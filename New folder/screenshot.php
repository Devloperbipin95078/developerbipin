<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/scr.css">
    <title>Screenshot</title>
    <style>
        #fm{
    width: 500px;
    height: 300px;
    padding:20px;
    background-image:url("img/iii.jpg");
}
input{
    padding: 10px;
    width: 200px;
  
}
textarea{
    width: 95%;
    height: 100px;
    
}
input,textarea{
    font-size:20px;
} 
button{
    width:300px;
    padding:10px;
    font-size:15px;
    margin-left:60px;
}
    </style>
</head>
<body>
    <header>
    <ul>
        <li>
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="">Portfolio</a>
        </li>
    </ul>
    </header>

    <section>
    
    </section>
  <main>
    <div id="fm">
    <input type="file" name="file" id="file"><br>
    <textarea name="text" id="text" cols="30" rows="10" placeholder="Write here your problum......"></textarea>
    <button type="submit" name="submit">Send</button>
    </div>
    </main>

    <script>
        var text = document.getElementById('text');
        text.addEventListener("focus",function(){
   text.style.background="red";
        });

   text.addEventListener("blur",function(){
   text.style.background="gray";
  
        });
        text.addEventListener("blur",function(){
   text.style.color="white";
  
        });
       
    </script>
</body>
</html>