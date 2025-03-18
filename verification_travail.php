<?php
include_once("dashboard_chef.php");
 ?>
<!-- Mettre des cartes hrml et ccs qui vont montrer le travail fait -->
<h2>Vérification du travail</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
             background: rgba(7, 201, 68, 0);
             max-height:auto  ;
             padding: 2%;
             display: flex;
                 flex-wrap: wrap;
                gap: 20px;

        }
        .cartes{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background: rgba(4, 73, 25, 0.325);
            height: 100px;
            border-radius: 15px;
            width: 100px;
            box-shadow: 0 4px 10px rgba(245, 245, 245, 0.5);
        }
        .cartes-body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background: rgba(4, 73, 25, 0.325);
            height: 100px;
            border-radius: 15px;
            width: 100px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.5);
        }
        .cartes h6{
            color: white;
            font-size: 18px;
            text-align: center;
            margin-top: 15px;
        }
        .cartes-body a{
            text-decoration: none;
            color: white;
height: 100%;
        }
        .cartes-body img{
            width: 100%;
            height: 100%;
            border-radius: 15px;
        }
        .cartes:hover{
            background: rgba(4, 73, 25, 0.777);
            transform: scale(1.1);
            transition: 0.5s;
        }
     
    </style>
</head>
<body>
    <div class="container">
<div class="cartes">
    <div class="cartes-body">
       <a href=""><img src="images/2.png" alt=""></a> 
    </div>
<h6>Cartes 1</h6>
 </div>

<div class="cartes">
    <div class="cartes-body">
        <a href=""><img src="images/1.png" alt=""></a>
    </div>
    <h6>Cartes 2</h6>
</div>

<div class="cartes">
    <div class="cartes-body">
        <a href=""><img src="images/2.png" alt=""></a>
    </div>
    <h6>Cartes 3</h6>

    
    

</div>

 </body>
</html>

