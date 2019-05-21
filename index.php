

    <?php
    require_once "functions.php";
    require_once "model/database.php";
    
    $services = getAllRows("country");
    // $testimonies = getAllRows("temoignage", "date_creation DESC", 3);
    
    getHeader("Accueil");
    ?>


  <main>

    <section class="section1">

      <h1 class="hidden-text">Notre Engagement</h1>

      <div class="section1-inner container">

        <article class="section1-article ">

         <h2>Notre Engagement</h2>
          <p>Ecouter vos besoins, répondre à vos attentes et construire ensemble VOTRE voyage, celui dont vous avez
            toujours rêvé. Avec ou sans guide, chez l’habitant ou en lodge de luxe, c’est vous qui choisissez. Nous vous
            accompagnons à chaque étape pour vous donner les meilleurs conseils dans la préparation et l’organisation de
            votre voyage.</p>
         

        </article>

      </div><!-- .section1-inner -->

    </section><!-- .section1 -->

    <section class="realisations-wrapper">

      <div class="realisations owl-carousel">

        <article class="realisations-article" id='anc-destinations'>
          <a href="#" class="realisations-content">
            <div class="panel-title">
              <h2>Le Mexique</h2>
            </div>
            <img src="./images/yucatanphoto.png" alt="Le Mexique" />
          </a>
        </article>

        <article class="realisations-article" >
          <a href="#" class="realisations-content">
            <div class="panel-title">
              <h2>Le Guatemala</h2>
            </div>
            <img src="./images/guatemala.png" alt="Le Guatemala" />
          </a>
        </article>

        <article class="realisations-article">
          <a href="#" class="realisations-content">
            <div class="panel-title">
              <h2>Le Honduras</h2>
            </div>
            <img src="./images/OT-Honduras.png" alt="Le Honduras" />
          </a>
        </article>

        <article class="realisations-article">
          <a href="#" class="realisations-content">
            <div class="panel-title">
              <h2>Le Salvador</h2>
            </div>
            <img src="./images/elsalvador.png" alt="Le Salvador" />
          </a>
        </article>

        <article class="realisations-article">
          <a href="#" class="realisations-content">
            <div class="panel-title">
              <h2>Le Costa Rica</h2>
            </div>
            <img src="./images/surfer-blue-water-right-surfing-costa-rica.png" alt="Le Costa Rica" />
          </a>

      </article>
    </div>
    </section><!-- .realisations -->

    <section class="services" id='anc-sejours'>

      <h1 class="hidden-text">Nos Séjours</h1>

      <div class="services-inner container">

        <div class="services-col">
          <article class="services-article">

            <h2>Aztèques et Discothèques</h2>
            <p>Visitez les plus beaux sites Aztèques et profitez de la vie nocturne mexicaine</p>
            <a href="#" class="more">En savoir plus</a>
          </article>
        </div>

        <div class="services-col">
          <article class="services-article">

            <h2>Mayas et Maillots</h2>
            <p>Civilisation Mayas, plages de rêves et Lacs enchanteurs</p>
            <a href="#" class="more">En savoir plus</a>
          </article>
        </div>

        <div class="services-col">
          <article class="services-article">

            <h2>Surf de Costa à Costa</h2>
            <p>Le Costa Rica d'Est en Ouest à la poursuite du soleil et du swell parfait</p>
            <a href="#" class="more">En savoir plus</a>
          </article>
        </div>

        <div class="services-col">
          <article class="services-article">

            <h2>Faune éxubérante, Volcans envoûtants</h2>
            <p>Découverte des richesses naturelles de la jungle d'Amérique centrale.
            </p>
            <a href="#" class="more">En savoir plus</a>
          </article>
        </div>

      </div><!-- .services-inner -->

    </section><!-- .services -->

    <section class="section-voyage" id='anc-carnets'>
        <h1 class="hidden-text">Carnets de Voyage</h1>
        <h2><a href="#">Carnets de Voyage</a></h2>
        <p>Les meilleures photos et récits d'aventure de nos voyageurs</p>
      

      <div class="gallery container">
         
        <figure>
          <img src="images/6518.png" alt="horizon">
          <figcaption>Là c'est moi Patrick, je regarde l'horizon. Nous étions arrivés dans les plaines décharnées de l'ouest mexicain. Un moment de plénitude que j'ai voulu avec vous. Merci Aztrek, ce voyage était exceptionnel</figcaption>
        </figure>
        <figure>
          <img src="images/le-combi-volkswagen-est-devenu-culte-illustration-flickr-cc-kirrin-1508313090.png"
            alt="combi-vw">
          <figcaption>Nous sommes partis à 2, en combi VW. C'était le voyage de mes rêves et nous en avons profitez
            grâce aux précieux conseils de Rocio</figcaption>
        </figure>
        <figure>
          <img src="images/costa-paysage.png" alt="costa-paysage">
          <figcaption>Les plages incroyables et les eaux bleues turquoises resteront gravés à jamais dans ma mémoire.</figcaption>
        </figure>

        <figure>
          <img src="./images/485.png" alt="mexique">
          <figcaption>Velit, reiciendis unde perferendis accusantium.</figcaption>
        </figure>
        <figure>
          <img src="images/costa-toucan_400.png" alt="toucan">
          <figcaption>Suscipit tenetur, quam alias sapiente.</figcaption>
        </figure>
        <figure>
            <img src="./images/485.png" alt="mexique">
            <figcaption>Velit, reiciendis unde perferendis accusantium.</figcaption>
          </figure>

      </div><!-- .gallery -->

    </section><!-- .section-3 -->


    <section class="insta-carousel-wrapper" id="anc-commu">
      <h1 class="hidden-text">Instagram #Aztrek</h1>
      <h2 >Instagram #Aztrek</h2>
      <p>Suivez les aventures de nos trekkeurs avec #Aztrek!</p>
      <div class="insta-carousel owl-carousel">
        <article class="insta-article">
          <a href="#" class="insta-content">
            <img src="./images/squa-costa1.jpg" alt="Le Mexique" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">
            <img src="./images/squa-costa2.jpg" alt="Le Guatemala" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-costa3.jpg" alt="Le Honduras" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-costa4.jpg" alt="Le Honduras" />
          </a>
        </article>


        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-guate1.jpg" alt="Le Honduras" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-guate2.JPG" alt="Le Honduras" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-guate3.jpg" alt="Le Honduras" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-hon1.jpg" alt="Le Honduras" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-hon2.jpg" alt="Le Honduras" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-mexi2.jpg" alt="Le Honduras" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-mexi1.jpg" alt="Le Honduras" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-mexi3.jpeg" alt="Le Honduras" />
          </a>
        </article>

        <article class="insta-article">
          <a href="#" class="insta-content">

            <img src="./images/squa-mexi4.jpeg" alt="Le Honduras" />
          </a>
        </article>

      </div>
  
    </section><!-- .insta-carousel -->


  </main>


  <?php getFooter(); ?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/stellarnav.min.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>