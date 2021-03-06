<?php
require_once __DIR__ . "/../config/parameters.php";

// Connexion à la base de données
$connection = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USER, DB_PASS, [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
]);

// Chargement automatique des fichiers contenus dans le dossier "entities"
foreach (glob(__DIR__ . "/entities/*.php") as $file) {
    require_once $file;
}

/**
 * Rechercher l'ensemble des lignes d'une table
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


/**
 * Informations et liens vers reseaux sociaux
 */


// function getAllReseaux() {
//     global $connection;

//     $query = "
//         SELECT
//             reseaux.*,
//         FROM reseaux
//     ";

//     $stmt = $connection->prepare($query);
//     $stmt->execute();

//     return $stmt->fetchAll();
// }


   


