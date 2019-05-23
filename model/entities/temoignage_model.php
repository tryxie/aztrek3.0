<?php

function getAllTemoignages() {
    global $connection;

    $query = "
        SELECT
            temoignage.*,
            CONCAT(utilisateur.prenom, ' ', utilisateur.nom) AS utilisateur
        FROM temoignage
        INNER JOIN utilisateur ON utilisateur.id = temoignage.utilisateur_id
        LIMIT 3
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}