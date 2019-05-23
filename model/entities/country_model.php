<?php

// Admin CRUD insertion Destination
function insertCountry(string $label, string $picto, string $description) {
    global $connection;
    $query = "
        INSERT INTO country (label, description, picto)
        VALUES (:label,:description,:picto,)
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":label", $label);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":picto", $picto);

    $stmt->execute();
}

// Admin: Update Destination
function updateCountry(string $label, string $picto, string $description) {
    global $connection;
    $query = "
        UPDATE country
        SET label = :label,
        description = :description,
            picto = :picto
         
        WHERE id = :id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":label", $label);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":picto", $picto);

    $stmt->execute();
}