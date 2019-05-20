<?php
require_once "functions.php";
require_once "model/database.php";

$id = $_GET["id"]; // Récupérer le paramètre id dans l'URL

$sejour = getOneRow("sejour", $id);
$temoignage = getAllRows("temoignage", $id);

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

<section class="section-voyage" id='anc-carnets'>
        <h1 class="hidden-text">Carnets de Voyage</h1>
        <h2><a href="#">Carnets de Voyage</a></h2>
        <p>Les meilleures photos et récits d'aventure de nos voyageurs</p>
        <p><?= $temoignage["contenu"]; ?></p>
      

      <div class="gallery container">
         
        <figure>
          <img src="images/6518.png" alt="horizon">
          <figcaption>Là c'est moi Patrick, je regarde l'horizon. Nous étions arrivés dans les plaines décharnées de l'ouest mexicain. Un moment de plénitude que j'ai voulu avec vous. Merci Aztrek, ce voyage était exceptionnel</figcaption>
        </figure>
        <figure>
          
      </div><!-- .gallery -->

    </section><!-- .section-3 -->


<?php getFooter(); ?>