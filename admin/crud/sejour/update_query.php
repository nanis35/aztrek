<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$id = $_POST["id"];
$nom = $_POST["nom"];
$niveau = $_POST["niveau"];
$duree = $_POST["duree"];
$pays_id = $_POST["pays_id"];
$description_courte = $_POST["description_courte"];
$description_longue = $_POST["description_longue"];
    
// Upload de l'image
if ($_FILES["photo"]["error"] == UPLOAD_ERR_NO_FILE) {
    $sejour = getOneEntity("sejour", $id);
    $photo = $sejour["photo"];
} else {
    $photo = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"]["tmp_name"];

    move_uploaded_file($tmp, "../../../uploads/" . $photo);
}

// Enregistrement en base de données
updateSejour($id, $nom, $duree, $photo, $niveau, $description_courte, $description_courte, $pays_id);

// Redirection vers la liste
header("Location: index.php");