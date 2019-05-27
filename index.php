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
      <div><a href="#">Se connecter</a></div>
      <div><a href="#">S'inscrire</a></div>
    </div>
  </header>

  <section class="main">

    <img src="src/assets/img/map.jpg" alt="Carte">

    <form class="actualites" action="traitementFormulaire.php">
      <input class="actualites__area" type="text" placeholder="Dîtes quelque chose...">
      <input class="actualites__button" type="submit" name="Publier">
    </form>

    <div class="pubs">
      <img src="src/assets/img/pub1.jpg" alt="Pub">
      <img src="src/assets/img/pub2.jpg" alt="Pub">
      <img src="src/assets/img/pub3.jpg" alt="Pub">
    </div>
  </section>


</body>

</html>