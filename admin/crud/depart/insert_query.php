<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$prix = $_POST["prix"];
$date_depart = $_POST["date_depart"];
$nb_place = $_POST["nb_place"];
$sejour_id = $_POST["sejour_id"];


insertSejour($date_depart, $nb_place, $prix, $sejour_id);

header("Location: index.php");