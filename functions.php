<?php

function getHeader(string $label) {
    require_once "layout/header.php";
}

function getNav() {
    require_once "layout/nav.php";
}

function getFooter() {
    require_once "layout/footer.php";
}

function isActive(string $url, bool $endWith = false): bool {
    if (
        (!$endWith && strpos($_SERVER['REQUEST_URI'], $url))
        || ($endWith && endsWith($_SERVER['REQUEST_URI'], $url))
    ) {
        return true;
    }
    return false;
}

function endsWith(string $str, string $search): bool {
    $length = strlen($search);
    return substr($str, -$length) === $search;
}

function debug($var, bool $die = true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die) {
        die;
    }
}

function getCurrentUser() {
    // Démarrer la session si pas encore démarrée
    if (!isset($_SESSION)) {
        session_start();
    }
    // Récupérer l'utilisateur en cours si connecté
    if (isset($_SESSION["id"])) {
        return getOneRow("utilisateur", $_SESSION["id"]);
    }
    return null;
}