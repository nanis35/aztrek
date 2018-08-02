<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
/*$nom = $_POST["nom"];*/
$prix = $_POST["prix"];
$nb_place = $_POST["nb_place"];
$date_depart = $_POST["date_depart"];
$sejour_id = $_POST["sejour_id"];

// Upload de l'image
/*if ($_FILES["photo"]["error"] == UPLOAD_ERR_NO_FILE) {
    $pays = getOneEntity("depart", $id);
    $photo = $pays["photo"];
} else {
    $photo = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"]["tmp_name"];

    move_uploaded_file($tmp, "../../../uploads/" . $photo);
}$*/

updateDepart($id, $date_depart, $nb_place, $prix, $sejour_id);

header("Location: index.php");