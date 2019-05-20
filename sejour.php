<?php
require_once "functions.php";
require_once "model/database.php";

$id = $_GET["id"]; // Récupérer le paramètre id dans l'URL

$realisation = getOneRow("sejour", $id);

getHeader($sejour["titre"]);
?>

<header class="page-header">
    <?php getNav(); ?> 
</header>

<div class="content-header service-header">
    <h1><?= $sejour["titre"]; ?></h1>
</div>

<section class="container">
    <p><?= $sejour["description"]; ?></p>
</section>

<?php getFooter(); ?>