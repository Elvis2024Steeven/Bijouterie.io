<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Bijouterie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-image: url('images/2.png');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: "Poppins", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .inscription {
    background: rgba(255, 255, 255, 0.436);
    width: 900px;
    border-radius: 12px;
    padding: 1%;
    color: black;
    display: flex;
    flex-direction: row; /* Pour aligner le logo au-dessus */
    justify-content: center;
    align-items: center;
    gap: 20px; /* Espace entre le logo et les formulaires */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    flex-flow: row wrap;
}


        .log {
            background: rgba(0, 0, 0, 0);
            height: 500px;
            width: 48%; /* Permet d'ajuster la taille tout en gardant un bon alignement */
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .inscription {
                flex-direction: column;
                width: 90%;
            }

            .log {
                width: 80%;
            }
        }

.form{
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 95%;
    margin: 0 auto;
    padding: 20px;
    border-radius: 12px;
    background: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    color: black;
    text-align: left;
}
.form h1{
    text-align: center;
    color: black;
    font-size: 25px;
}
.form input{
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    height: 50px;
}
.inscription .logo-container {
    width: 100%;
    text-align: center;
}


.inscription img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    margin: 0 auto;
    box-shadow: rgba(0, 0, 0, 0.523) 0px 0px 10px;
}



    </style>
</head>
<body>

    <div class="inscription">
        <!-- Conteneur pour centrer le logo -->
        <div class="logo-container">
            <img src="images/1.png" alt="logo">
        </div>
    
        <div class="log">
            <form class="form" action="login.php" method="post">
                <h1>Chef de l'atelier</h1>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" required>
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom"required>
                <label for="Mot de pass">Mot de pass:</label>
                <input type="password" name="mot_pass"required>
                <label for="role">Role:</label>
                <select name="role" required>
                     <option value="Chef">Chef d'atelier</option>
                    <option value="Fondeur">Fondeur</option>
                    <option value="Sertisseur">Sertisseur</option>
                    <option value="Polisseur">Polisseur</option>
                </select>
                
                <button class="btn btn-primary" type="submit">log-in</button>
            </form>
        </div>
    
        <div class="log">
            <form class="form" action="login.php" method="post">
                <h1>Opérateurs</h1>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" required>
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" required>
                <label for="Mot de pass">Mot de pass:</label>
                <input type="password" name="mot_pass" required>
                <label for="role">Role:</label>
                <select name="role" required>
                <option value="Chef">Chef d'atelier</option>
                <option value="Fondeur">Fondeur</option>
                <option value="Sertisseur">Sertisseur</option>
                <option value="Polisseur">Polisseur</option>
                </select>
                <button class="btn btn-primary" type="submit">log-in</button>
            </form>
        </div>
    </div>


</body>
</html>
