
<?php
require_once "functions.php";
require_once "model/database.php";

$countries = getAllRows("country");

?>


<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="...">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aztrek</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Quango" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/stellarnav.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="home">

 <!-- header page header  -->

<header class="page-header">

<div class="page-header-inner">

  <div class="logo container">
    <a href="index.php" title="Accueil"><img src="./images/aztreklogoBAT.svg" alt="Logo"></a>
  </div>

  <!-- <form action="#" class="search-form">

    <h2 class="country">Nos Destinations</h2>

    <select id="country" name="country"> 
      <option value="country"><?php foreach ($countries as $country) :?>
              <li><a href="country.php?id=<?= $country["id"]; ?>"><?= $country ["label"]?></a></li>
                <?php endforeach;?></option>
    </select>
    <input type="submit" value="Valider">

  </form> -->

  <!-- main navigation header-nav -->
  <nav class="header-nav">

    <div class="main-nav stellarnav">
    <ul class="">
    <?php foreach ($countries as $country) :?>
              <li><a href="country.php?id=<?= $country["id"]; ?>"><?= $country ["label"]?></a></li>
                <?php endforeach;?></ul>
                <ul><li> <a href="#anc-carnets">Carnets de Voyage</a></li>
            <li><a href="#anc-commu">Communauté et Culture</a></li>
          </ul>
    </div>

  </nav><!-- .header-nav -->

</div><!-- .page-header-inner -->

</header><!-- .page-header -->

