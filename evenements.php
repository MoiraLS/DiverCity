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
  <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
  <title>DiverCity</title>
</head>

<body>

  <!--    HEADER    -->
  <header class="header">
    <img class="header__logo" src="src/assets/img/Logo.svg" alt="Logo DiverCity">

    <ul class="header__menu menu">
      <li class="menu__item"><a href="actualites.php">ACTUALITÉS</a></li>
      <li class="menu__item item--selected"><a href="evenements.php">ÉVÈNEMENTS</a></li>
      <li class="menu__item"><a href="#">JOBS</a></li>
      <li class="menu__item"><a href="#">CONTACT</a></li>
    </ul>

    <input class="header__search" type="search" placeholder="Rechercher">

    <div class="header__account">
    <?php
    if(isset($_SESSION['user']))
    {
      ?>
      <p><?php echo $_SESSION['user']->getFirstname(); ?></p>
      <form method='post' action="Deconnecter.php">
        <input type="submit" name="deconnecter" value='Déconnecter'>
      </form>
      <?php
    } else
    {
      ?>
      <div class="account"><a class="account--login" href="index.php">SE CONNECTER</a></div>
      <div class="account account--creation"><a class="account--creation" href="index.php">S'INSCRIRE</a></div>
    <?php
    }
    ?>

    </div>
  </header>

  <?php
  if(isset($_GET['alert']))
  {
    ?>
    <div class="alert"><p><?php echo $_GET['alert'] ?></p></div>
  <?php
  }
  ?>

  <!--    MAIN    -->
  <main class="main">

    <div class="map">
      <img class="map_img" src="src/assets/img/map.jpg" alt="Carte">
    </div>

    <div class="actu">
      <form class="main__actualites actualites" action="poster.php" method="post">
        <textarea class="actualites__area" name="content" placeholder="Dîtes quelque chose..." required></textarea>
        <input class="actualites__button" type="submit" name="poster" value="POSTER">
      </form>
      <?php $allPublication = App\Database::getAllPublication();
      foreach ($allPublication as $Publication):
      ?>
      <div class="all__publication">
        <div class="publication">
          <p class="name"><?= $Publication->getUser()->getFirstname() ?> <?= $Publication->getUser()->getLastname() ?></p>
          <div class="contenu"><?= $Publication->getContent(); ?></div>
          <p class="date"><?= $Publication->getDate(); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  
    <div class="pubs">
      <img class="pub" src="src/assets/img/pub1.png" alt="Pub">
      <img class="pub pub--center" src="src/assets/img/pub2.png" alt="Pub">
      <img class="pub" src="src/assets/img/pub3.png" alt="Pub">
    </div>

  </main>


</body>

</html>