<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST["nom"];
$description = $_POST["description"];

// Upload de l'image
$photo = $_FILES["photo"]["name"];
$tmp = $_FILES["photo"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $photo);

insertPays($nom, $photo, $description);

header("Location: index.php");