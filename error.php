<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur - Bijouterie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style global de la page */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8d7da; /* Fond léger rose pour l'erreur */
            color: #721c24; /* Texte rouge pour indiquer une erreur */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Remplir toute la hauteur de la page */
            margin: 0;
        }

        /* Conteneur central */
        .error-container {
            background-color: #ffffff; /* Fond blanc pour faire ressortir le message */
            padding: 40px;
            border-radius: 10px;
            border: 1px solid #f5c6cb; /* Bordure rose clair */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        /* Titre d'erreur */
        h1 {
            font-size: 4em;
            margin-bottom: 20px;
        }

        /* Message d'erreur */
        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        /* Lien de retour à l'accueil */
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 1.2em;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="error-container">
        <h1>Oups !</h1>
        <p>Il semble qu'il y ait un problème avec la page.</p>
        <p><strong>Erreur :</strong> Quelque chose s'est mal passé.</p>
        <p>Retour à la <a href="login_form.php">page d'accueil</a>.</p>
    </div>

</body>
</html>
