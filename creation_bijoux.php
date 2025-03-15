<?php
include_once("dashboard_chef.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Bijoux</title>
    <style>
        form{
            align-items: center;
             justify-content: center;
            display: flex;
            flex-direction: column;
             background: none;
             padding: 1%;
                border-radius: 5px;
                height: 600px;
        }
        label{
            color: white;
            font-size: 20px;
            margin-top: 10px;
         }
        input{
            padding: 10px;
            border-radius: 5px;
            border:none;
            height: 50px;
            margin-bottom: 10px;
            width: 50%;
        }
        textarea{
            padding: 10px;
            border-radius: 5px;
            border:none;
            height: 80px;
            margin-bottom: 10px;
            width: 50%;
        }
        select{
            padding: 10px;
            border-radius: 5px;
            border:none;
            height: 50px;
            margin-bottom: 10px;
            width: 50%;
        }
        button{
            padding: 10px;
            border-radius: 5px;
            border:none;
            height: 50px;
            margin-top: 10px;
            width: 50%;
            background: #f1c40f;
            color: white;
            font-size: 20px;
        }
        button:hover{
            background: #f39c12;
         }

    
    </style>
</head>
<body>
    <h1>Créer un Bijoux</h1>
    <form action="creation_bijoux_process.php" method="POST" enctype="multipart/form-data">
        <label for="type">Type de bijoux</label>
        <input type="text" name="type_bijoux" required>

        <label for="description">Description du bijoux</label>
        <textarea  name="description"></textarea>   
        
        <label for="image" >Image du bijoux</label>
        <input type="file" name="image" required>

        <label for="prix">Prix du bijoux</label>
        <input type="number" name="prix_estime" required>

        <label for="metier">Choisir un Opérateur</label>
        <select name="id_metier">
            <option value="fondeur">Fondeur</option>
            <option value="sertisseur">Sertisseur</option>
            <option value="polisseur">Polisseur</option>
        </select>
        <button type="submit">Créer</button>
    </form>
</body>
</html>

