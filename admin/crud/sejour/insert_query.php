<?php
require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$titre = $_POST["nom"];
$date_debut = $_POST["date_debut"];
$date_fin = $_POST["date_fin"];
$description = $_POST["description"];
$duree = $_POST["duree"];
$niveau = $_POST["niveau"];

// Upload de l'image
$photo = $_FILES["photo"]["nom"];
$tmp = $_FILES["photo"]["tmp_nom"];

move_uploaded_file($tmp, "../../../uploads/" . $photo);

// Enregistrement en base de données
insertProjet($nom, $niveau, $photo, $date_debut, $date_fin, $description, $duree);

// Redirection vers la liste
header("Location: index.php");