 <?php
$conn = require("connection.php");

      // recuperer les infos du formulaire
    $type_bijoux = trim($_POST['type_bijoux']);
    $description = trim($_POST['description']);
    $image = $_FILES['image'];
    $prix_estime = trim($_POST['prix_estime']);
    $id_metier = trim($_POST['id_metier']);

    // verifier si les champs ne sont pas vide avant l'insertion dans la bdd
    if (!empty($type_bijoux) && !empty($description) && !empty($image['name']) && !empty($prix_estime) && !empty($id_metier)) {
        // preparer la requete
        $sql = "INSERT INTO bijoux (type_bijoux, description, image, prix_estime, id_metiers) VALUES (:type_bijoux, :description, :image, :prix_estime, :id_metiers)";

        $stmt = $conn->prepare($sql);

        //utiliser bindparm pour lier les variables(qui contiennt les infos du formulaire) au colonnes dans la bdd
        $stmt->bindParam(':type_bijoux', $type_bijoux);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image['name']);
        $stmt->bindParam(':prix_estime', $prix_estime);
        $stmt->bindParam(':id_metiers', $id_metier);

        // Executer la requete
        if ($stmt->execute()) {
            echo "Bijoux créé avec succès!";
        } else {
            echo "Erreur lors de la création du bijoux.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
 ?>
 