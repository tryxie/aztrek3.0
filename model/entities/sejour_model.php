<?php


function getAllSejoursByCountry(int $id) {
    global $connection;
    $query = "
        SELECT
            sejour.*,
            country.label AS country
        FROM sejour
        INNER JOIN country ON sejour.country_id = country.id
        WHERE sejour.country_id = :id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();

}

function getOneSejourByCountry(int $id) {
    global $connection;
    $query = "
        SELECT
            sejour.*,
            country.label AS country
        FROM country
        INNER JOIN country ON country.sejour_id = sejour.id
        WHERE country.sejour_id = :id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();

}


function getOneSejour(int $id) {
    global $connection;
    $query = "
        SELECT
            sejour.*,
            DATE_FORMAT(sejour.date_creation, '%d/%m/%Y') AS date_creation_format,
            country.label AS country
        FROM country
        INNER JOIN country ON sejour.country_id = country.id
        WHERE sejour.id = :id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch();
}

// function getAllTagsBySejour(int $id) {
//     global $connection;
//     $query = "
//         SELECT *
//         FROM tag
//         INNER JOIN sejour_has_tag rht ON tag.id = rht.tag_id
//         WHERE rht.sejour_id = :id
//     ";
//     $stmt = $connection->prepare($query);
//     $stmt->bindParam(":id", $id);
//     $stmt->execute();
//     return $stmt->fetchAll();
// }


    function getAllTemoignagesBySejour(int $id) {
    global $connection;
    $query = "
        SELECT *
        FROM temoignage
        WHERE temoignage.sejour_id = :id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();
}
function getAllEtapesBySejour(int $id) {
    global $connection;
    $query = "
        SELECT
            etape.*,
            sejour.titre AS sejour
        FROM etape
        INNER JOIN sejour ON etape.sejour_id = sejour.id
        WHERE etape.sejour_id = :id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();
}


/// Admin: fonctions CRUD

// Admin: insertion Sejour
function insertSejour(string $titre, int $country_id, string $photo, float $prix, string $description, int $duree) {
    global $connection;

    $query = "
        INSERT INTO realisation (titre, photo, prix, description, duree, date_creation, service_id)
        VALUES (:titre, :photo, :prix, :description, :duree, NOW(), :service_id)
    ";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":service_id", $service_id);
    $stmt->execute();
}

// Admin: Update Sejour
function updateSejour(string $titre, int $country_id, string $photo, float $prix, string $description, int $duree) {
    global $connection;
    $query = "
        UPDATE sejour
        SET titre = :titre,
            photo = :photo,
            prix = :prix,
            description = :description,
            duree = :duree,
            
        WHERE id = :id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":service_id", $service_id);
    $stmt->execute();
}