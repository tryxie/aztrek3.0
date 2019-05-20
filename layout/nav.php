<?php
$delimiter = explode("/", $_SERVER["REQUEST_URI"]);
$filename = end($delimiter);

$countries = getAllRows('country');
var_dump($countries);

$menus = [
    [
        "item" => "Accueil",
        "url" => "index.php"
    ],
    [
        "item" => "Qui sommes-nous ?",
        "url" => ""
    ],
    [
        "item" => "country",
        "url" => "country.php"
    ],
    // [
    //     "item" => "Témoignages",
    //     "url" => ""
    // ],

    // [
    //     "item" => "Contact",
    //     "url" => "contact.php"
    // ]
];
?>


  <!-- header navigation  -->
  <nav class="header-nav">

    <div class="main-nav stellarnav">
    <ul class="">
    <li><a href="#nav-country">Nos destinations</a>
            <ul>
                <?php foreach ($countries as $country) :?>
              <li><a href="country.php?id=<?= $country["id"]; ?>"><?= $country ["label"]?></a></li>
                <?php endforeach;?>
            </ul>
          </li>
    </div>

  </nav><!-- .header-nav -->