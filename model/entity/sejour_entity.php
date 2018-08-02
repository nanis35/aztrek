<?php

/**
 * Retourne la liste des séjours
 * @return array Liste des séjours
 */
function getAllSejours(int $limit = 999): array {
    global $connexion;

    $query = "SELECT
                sejour.*,
                pays.nom AS pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            LIMIT :limit;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertSejour(int $date_depart, int $nb_place, int $sejour_id, int $prix): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO depart ( date_depart, nb_place, sejour_id, prix) VALUES (:date_depart, :nb_place, :sejour_id, :prix)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":nb_place", $nb_place);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->bindParam(":prix", $prix);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updateSejour(int $id, string $date_depart, string $nb_place, string $sejour_id, string $prix): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE sejour
                SET date_depart = :date_depart,
                    nb_place = :nb_place,
                    sejour_id = :sejour_id,
                    prix = :prix,
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":nb_place", $nb_place);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->bindParam(":prix", $prix);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}