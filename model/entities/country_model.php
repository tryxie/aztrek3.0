<?php


function insertCountry(string $label, string $picto, string $description) {
    global $connection;

    $query = "
        INSERT INTO country (label, picto, description)
        VALUES (:label, :picto, :description)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":label", $label);
    $stmt->bindParam(":picto", $picto);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
}
