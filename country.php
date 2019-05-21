<?php
require_once "functions.php";
require_once "model/database.php";

$id = $_GET["id"]; // Récupérer le paramètre id dans l'URL

$country = getOneRow("country", $id);
$sejours = getAllSejoursByCountry($id);

getHeader($country["label"]);
?>

 <!-- content-header picto-country -->

<div class="content-header service-header">
    <img src="images/picto-country/<?= $country["picto"]; ?>" alt="<?= $country["label"]; ?>">
    </div>

<!-- content-main container -->
    <section class="container">
    <h1>Le <?= $country["label"]; ?></h1>
    <p><?= $country["description"]; ?></p>


    <div class="services-grid">
        <?php foreach ($sejours as $sejour) : ?>
            <article>
            
                <h2><?= $sejour["titre"]; ?></h2>
                

                <p><?= $sejour["duree"]; ?> Jours</p>
                
                <?php for($i = 0; $i < $sejour["difficulte"]; $i++) : ?>
                    <img src="./images/site-icon/etoileB.png">
                <?php endfor; ?>
                </p>
             

                <a href="sejour.php?id=<?= $sejour["id"]; ?>" class="btn">
                    Voir cette destination...
                </a>
            </article>
        <?php endforeach; ?>

    </div>

</section>

<!-- content-temoignages container -->

<section>

</section>

<?php getFooter(); ?>