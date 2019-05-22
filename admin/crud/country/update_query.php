<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_POST["id"];
$label = $_POST["label"];
$picto = $_FILES["picto"]["name"];

if ($picto) {
    // Gérer l'upload du fichier
    move_uploaded_file($_FILES["picto"]["tmp_name"], "../../../uploads/country/" . $picto);
} else {
    $country = getOneRow("country", $id);
    $picto = $country["picto"];
}

updateCountry($id, $label, $picto);

header("Location: index.php");