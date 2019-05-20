<?php
require_once "functions.php";
require_once "model/database.php";

$id = $_GET["id"]; // Récupérer le paramètre id dans l'URL

$country = getOneRow("country", $id);
$sejours = getAllSejoursByCountry($id);

getHeader($country["label"]);
?>

<div class="content-header service-header">
    <img src="images/picto-country/<?= $country["picto"]; ?>" alt="<?= $country["label"]; ?>">
    <h1><?= $country["label"]; ?></h1>
</div>

<section class="container">

    <div class="services-grid">

        <?php foreach ($sejours as $sejour) : ?>
            <article>
                <h2><?= $sejour["titre"]; ?></h2>
                <img src="images/<?= $sejour["photo"]; ?>" alt="">
            

                <a href="sejour.php?id=<?= $sejour["id"]; ?>" class="btn">
                    Voir cette destination...
                </a>
            </article>
        <?php endforeach; ?>

    </div>

</section>

<?php getFooter(); ?>