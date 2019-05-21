<?php
require_once "functions.php";
require_once "model/database.php";

$id = $_GET["id"]; // Récupérer le paramètre id dans l'URL

$country = getOneRow("country", $id);
$sejours = getAllSejoursByCountry($id);

getHeader($country["label"]);
?>

<!-- content-header picto-country -->

<div class="content-header service-header container">
    <img src="images/picto-country/<?= $country["picto"]; ?>" alt="<?= $country["label"]; ?>">
<h1><?= $country["label"]; ?></h1>
<p><?= $country["description"]; ?></p>
</div>


<section class="services" id='anc-sejours'>
    <div class="services-inner">
        
            <?php foreach ($sejours as $sejour) : ?>
            <article class="services-col">
            <div class="services-article">
                <h2><?= $sejour["titre"]; ?></h2>
                <p><?= $sejour["duree"]; ?> Jours</p>
                <p>Difficulté: </p>
                <div class="diff">
                <?php for($i = 0; $i < $sejour["difficulte"]; $i++) : ?> 
                <img class="etoileB" src="./images/site-icon/etoileBB.png">
                <?php endfor; ?>
                </div>

                <a href="sejour.php?id=<?= $sejour["id"]; ?>" class="btn">
                    Voir cette destination...
                </a>
            </div>

            </article>
            <?php endforeach; ?>

       
    </div>

</section>

<!-- content-temoignages container -->

<section>

</section>

<?php getFooter(); ?>