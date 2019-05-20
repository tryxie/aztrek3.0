<?php
require_once __DIR__ . "/../config/parameters.php";

// Connexion à la base de données
$connection = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USER, DB_PASS, [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
]);

/**
 * Rechercher l'ensemble des lignes d'un table
 * @param string $table Nom de la table
 * @param string|null $orderby Tri
 * @param int|null $limit Limite
 * @return array Lignes retournées par la requête SQL
 */
function getAllRows(string $table, string $orderby = null, int $limit = null) {
    global $connection;

    $query = "SELECT * FROM $table";

    if ($orderby != null) {
        $query = $query . " ORDER BY $orderby";
    }
    if ($limit != null) {
        $query = $query . " LIMIT $limit";
    }

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

/**
 * Rechercher une ligne dans une table
 * @param string $table Nom de la table
 * @param int $id L'identifiant de la ligne
 * @return array Ligne retournée par la requête SQL
 */
function getOneRow(string $table, int $id) {
    global $connection;

    $query = "SELECT * FROM $table WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

/**
 * Supprimer une ligne dans une table
 * @param string $table Nom de la table
 * @param int $id Identifiant de la ligne
 */
function deleteRow(string $table, int $id) {
    global $connection;

    $query = "DELETE FROM $table WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
    } catch (PDOException $exception) {
        return $exception;
    }

    return null;
}

function getUtilisateurByEmailMotDePasse(string $email, string $password) {
    global $connection;

    $query = "
        SELECT *
        FROM utilisateur
        WHERE utilisateur.email = :email
        AND utilisateur.mot_de_passe = SHA1(:password)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();
}




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
        WHERE realisation.id = :id
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

function insertCountry(string $label, string $picto) {
    global $connection;

    $query = "
        INSERT INTO country (label, picto)
        VALUES (:label, :picto)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":label", $label);
    $stmt->bindParam(":picto", $picto);
    $stmt->execute();
}

function updateCountry(int $id, string $label, string $picto) {
    global $connection;

    $query = "
        UPDATE country
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





