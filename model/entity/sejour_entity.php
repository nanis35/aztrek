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

function insertSejour(string $nom, string $photo, string $duree, string $niveau, float $prix, string $description_courte, string $description_longue, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO projet (nom, photo, niveau, description_courte, description_courte, prix, pays_id) VALUES (:nom, :photo, :niveau, :duree :description_courte, :description_longue, :prix, :pays_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":niveau", $niveau);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updateSejour(int $id, string $nom, string $duree, string $photo, string $niveau, float $prix, string $description_courte, string $description_longue, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE projet
                SET nom = :nom,
                    photo = :photo,
                    duree = :duree,
                    niveau = :niveau,
                    prix = :prix,
                    description_courte = :description_courte,
                    description_longue = :description_longue,
                    pays_id = :pays_id
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":niveau", $niveau);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}