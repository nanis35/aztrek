<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$id = $_POST["id"];
$nom = $_POST["nom"];
$niveau = $_POST["niveau"];
$photo = $_POST["photo"];
$duree = $_POST["duree"];
$description_courte = $_POST["description_courte"];
$description_longue = $_POST["description_longue"];
    
// Upload de l'image
if ($_FILES["photo"]["error"] == UPLOAD_ERR_NO_FILE) {
    $sejour = getOneEntity("sejour", $id);
    $photo = $sejour["photo"];
} else {
    $photo = $_FILES["photo"]["nom"];
    $tmp = $_FILES["photo"]["tmp_nom"];

    move_uploaded_file($tmp, "../../../uploads/" . $photo);
}

// Enregistrement en base de données
updateSejour($id, $nom, $photo, $niveau, $description_courte, $description_courte, $duree);

// Redirection vers la liste
header("Location: index.php");