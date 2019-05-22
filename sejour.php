<?php
require_once "functions.php";
require_once "model/database.php";

$id = $_GET["id"]; // Récupérer le paramètre id dans l'URL

$sejour = getOneRow("sejour", $id);
$temoignages = getAllTemoignagesBySejour($id);
$etapes = getAllEtapesBySejour($id);

getHeader($sejour["titre"]);
?>


<section class="container">
<div class="content-header service-header">
    <h1><?= $sejour["titre"]; ?></h1>
</div>

<h2><?= $sejour["chapeau"]; ?></h2>

<img src="images/<?= $sejour["photo"]; ?>" alt="<?= $country["label"]; ?>">

    <p><?= $sejour["description"]; ?></p>
    <p><?= $sejour["accroche"]; ?></p>
</section>

<section class = "section-etape container">
<h1 class="hidden-text">Etapes du Séjour</h1>
        <h2><a href="#">Les Etapes</a></h2>
        <p>votre séjour jour après jour</p>
      

        <?php foreach ($etapes as $etape) : ?>
            <article>
            <img src="images/site-icon/<?= $etape["photo"]; ?>" alt="<?= $sejour["titre"]; ?>">
            <span>Jour : <?= $etape["jour"]; ?></span>
                <p> Itinéraire : <?= $etape["titre"]; ?><p>
                <p><?= $etape["description"]; ?><p>
                <p><?= $etape["information"]; ?><p>
               
            </article>
        <?php endforeach; ?>

    

    </section><!-- .section-3 -->

<section class="section-voyage" id='anc-carnets'>
        <h1 class="hidden-text">Carnets de Voyage</h1>
        <h2><a href="#">Carnets de Voyage</a></h2>
        <p>Les meilleures photos et récits d'aventure de nos voyageurs</p>
      

        <?php foreach ($temoignages as $temoignage) : ?>
            <article>
                <p><?= $temoignage["contenu"]; ?><p>
                <img src="images/6518.png" alt="horizon">
            </article>
        <?php endforeach; ?>

    

    </section><!-- .section-3 -->


<?php getFooter(); ?>