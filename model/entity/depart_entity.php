<?php

function getAllDeparts(): array {
    global $connexion;

    $query = "SELECT
                depart.*,
                pays.nom AS pays,
                sejour.nom AS sejour
            FROM depart
            INNER JOIN sejour ON sejour.id = depart.sejour_id
            INNER JOIN pays ON pays.id = sejour.pays_id;";

    $stmt = $connexion->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertDepart(string $date_depart, string $nb_place, string $prix, string $sejour_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO depart (date_depart, nb_place, prix, sejour_id) VALUES (:date_depart, :nb_place, :prix, :sejour_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":nb_place", $nb_place);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updateDepart(int $id, string $date_depart, string $nb_place, string $prix, string $sejour_id) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE depart SET date_depart = :date_depart, nb_place = :nb_place, prix = :prix, sejour_id = :sejour_id WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":nb_place", $nb_place);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();
}