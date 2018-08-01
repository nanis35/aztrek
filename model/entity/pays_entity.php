<?php

function insertPays(string $nom, string $photo, string $description): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO pays (nom, photo, description) VALUES (:nom, :photo, :description)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updatePays(int $id, string $nom, string $description, string $photo) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE pays SET nom = :nom, description = :description, photo = :photo WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":photo", $photo);
    $stmt->execute();
}