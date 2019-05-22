<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$id = $_POST["id"];
$titre = $_POST["titre"];
$photo = $_FILES["photo"]["name"];

if ($photo) {
    // Gérer l'upload du fichier
    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../uploads/sejour/" . $photo);
} else {
    $sejour = getOneRow("sejour", $id);
    $photo = $sejour["photo"];
}

updateSejour($id, $titre, $photo);

header("Location: index.php");