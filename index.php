<?php
require __DIR__ . '/bootstrap.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/assets/css/reset.css">
  <link rel="stylesheet" href="src/assets/css/style.css">
  <title>DiverCity</title>
</head>

<body>

  <!--    HEADER    -->
  <header class="header">
    <img class="header__logo" src="src/assets/img/Logo.svg" alt="Logo DiverCity">

    <ul class="header__menu menu">
      <li class="menu__item"><a href="#">ACTUALITÉS</a></li>
      <li class="menu__item"><a href="#">ÉVÈNEMENTS</a></li>
      <li class="menu__item"><a href="#">JOBS</a></li>
      <li class="menu__item"><a href="#">CONTACT</a></li>
    </ul>

    <input class="header__search" type="search" placeholder="Rechercher">

    <div class="header__account">
      <div class="account"><a class="account--login" href="login.php">Se connecter</a></div>
      <div class="account account--creation"><a class="account--creation" href="signin.php">S'inscrire</a></div>
    </div>
  </header>

  <div class="breadcrumb">
    <ul class="breadcrumb__item item">
      <li class="item item--opacity"><a href="#">Accueil</a></li>
      <li class="item item--space"><a href="#">Actualités</a></li>
    </ul>
  </div>

  <!--    MAIN    -->
  <main class="main">

    <img class="main__map" src="src/assets/img/map.jpg" alt="Carte">

    <form class="main__actualites actualites" action="traitementFormulaire.php">
      <textarea class="actualites__area" placeholder="Dîtes quelque chose..." required></textarea>
      <input class="actualites__button" type="submit" name="Poster" value="Poster">
    </form>

    <div class="pubs">
      <img class="pub" src="src/assets/img/pub1.jpg" alt="Pub">
      <img class="pub" src="src/assets/img/pub2.jpg" alt="Pub">
      <img class="pub" src="src/assets/img/pub3.jpg" alt="Pub">
    </div>

  </main>


</body>

</html>