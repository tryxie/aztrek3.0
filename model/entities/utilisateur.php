<?php


// Identification utilisateur/mot de passe
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