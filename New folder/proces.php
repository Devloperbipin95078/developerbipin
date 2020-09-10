<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ps.css">
    <title>ProcesBar</title>
    <style>
        #card:nth-child(1) svg circle:nth-child(2){
    stroke-dashoffset: calc(440 - (440 * 95)/ 100); 
    stroke:#00ff43
}

#card:nth-child(2) svg circle:nth-child(2){
    stroke-dashoffset: calc(440 - (440 * 90)/ 100); 
    stroke:yellow;
}
#card:nth-child(3) svg circle:nth-child(2){
    stroke-dashoffset: calc(440 - (440 * 80)/ 100); 
    stroke:green;
}
#card:nth-child(4) svg circle:nth-child(2){
    stroke-dashoffset: calc(440 - (440 * 90)/ 100); 
    stroke:red;
}
#card:nth-child(5) svg circle:nth-child(2){
    stroke-dashoffset: calc(440 - (440 * 70)/ 100); 
    stroke:gold;
}
#card:nth-child(6) svg circle:nth-child(2){
    stroke-dashoffset: calc(440 - (440 * 80)/ 100); 
    stroke:blue;
}
#card:nth-child(7) svg circle:nth-child(2){
    stroke-dashoffset: calc(440 - (440 * 90)/ 100); 
    stroke:lightcyan;
}
    </style>
</head>
<body>
    <div id="container">
    <div id="card">
    <div id="box">
    <div id="persent">
    <svg>
    <circle cx="70"  cy="70" r="70"></circle>
    <circle cx="70"  cy="70" r="70"></circle>
    </svg>
    <div id="number">
    <h2>95<span>%</span></h2>
    </div>
    </div>
    <h2 class="text">HTML</h2>
    </div>
    </div>

    <div id="card">
    <div id="box">
    <div id="persent">
    <svg>
    <circle cx="70"  cy="70" r="70"></circle>
    <circle cx="70"  cy="70" r="70"></circle>
    </svg>
    <div id="number">
    <h2>90<span>%</span></h2>
    </div>
    </div>
    <h2 class="text">CSS</h2>
    </div>
    </div>

    <div id="card">
    <div id="box">
    <div id="persent">
    <svg>
    <circle cx="70"  cy="70" r="70"></circle>
    <circle cx="70"  cy="70" r="70"></circle>
    </svg>
    <div id="number">
    <h2>80<span>%</span></h2>
    </div>
    </div>
    <h2 class="text">JAVASCRIPT</h2>
    </div>
    </div>
  
    <div id="card">
    <div id="box">
    <div id="persent">
    <svg>
    <circle cx="70"  cy="70" r="70"></circle>
    <circle cx="70"  cy="70" r="70"></circle>
    </svg>
    <div id="number">
    <h2>90<span>%</span></h2>
    </div>
    </div>
    <h2 class="text">JQUERY</h2>
    </div>
    </div>
   
    <div id="card">
    <div id="box">
    <div id="persent">
    <svg>
    <circle cx="70"  cy="70" r="70"></circle>
    <circle cx="70"  cy="70" r="70"></circle>
    </svg>
    <div id="number">
    <h2>70<span>%</span></h2>
    </div>
    </div>
    <h2 class="text">AJEX</h2>
    </div>
    </div>

    <div id="card">
    <div id="box">
    <div id="persent">
    <svg>
    <circle cx="70"  cy="70" r="70"></circle>
    <circle cx="70"  cy="70" r="70"></circle>
    </svg>
    <div id="number">
    <h2>80<span>%</span></h2>
    </div>
    </div>
    <h2 class="text">PHP</h2>
    </div>
    </div>
  
    <div id="card">
    <div id="box">
    <div id="persent">
    <svg>
    <circle cx="70"  cy="70" r="70"></circle>
    <circle cx="70"  cy="70" r="70"></circle>
    </svg>
    <div id="number">
    <h2>90<span>%</span></h2>
    </div>
    </div>
    <h2 class="text">BOOTSTROP</h2>
    </div>
    </div>

    </div>
</body>
</html>