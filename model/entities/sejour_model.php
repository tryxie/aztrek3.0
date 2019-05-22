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

function getAllTagsBySejour(int $id) {
    global $connection;

    $query = "
        SELECT *
        FROM tag
        INNER JOIN sejour_has_tag rht ON tag.id = rht.tag_id
        WHERE rht.sejour_id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}



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

function updateSejour(int $id, string $label, string $picto) {
    global $connection;

    $query = "
        UPDATE sejour
        SET label = :label,
            picto = :picto
        WHERE id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":label", $label);
    $stmt->bindParam(":picto", $picto);
    $stmt->execute();
}