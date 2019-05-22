<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$label = $_POST["label"];
$picto = $_FILES["picto"]["name"];
$description = $_POST["description"];

// Gérer l'upload du fichier
move_uploaded_file($_FILES["picto"]["tmp_name"], "../../../uploads/country/" . $picto);

insertCountry($label, $picto, $description);

header("Location: index.php");