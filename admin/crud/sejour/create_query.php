<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$titre = $_POST["titre"];
$country_id = $_POST["country_id"];
// $tag_ids = $_POST["tag_ids"];
$photo = $_FILES["photo"]["name"];
$prix = $_POST["prix"];
$description = $_POST["description"];
$duree = $_POST["duree"];

// Gérer l'upload du fichier
move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/sejour/" . $photo);

insertSejour($titre, $country_id, $photo, $prix, $description, $duree);

header("Location: index.php");