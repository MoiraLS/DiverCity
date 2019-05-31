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
      <li class="menu__item"><a href="evenements.php">ÉVÈNEMENTS</a></li>
      <li class="menu__item"><a class="item--selected" href="jobs.php">JOBS</a></li>
      <li class="menu__item"><a href="#">CONTACT</a></li>
    </ul>

    <div class="header__search">
      <span>Rechercher</span>
      <img src="src/assets/img/search.svg" alt="Rechercher">
    </div>

    <div class="header__account">
    <?php if(isset($_SESSION['user'])): ?>
    <p class="firstname"><?php echo $_SESSION['user']->getFirstname(); ?></p>
    <form method='post' action="Deconnecter.php">
      <input class="deco__button" type="submit" name="deconnecter" value='Déconnecter'>
    </form>
    <?php else: ?>
    <div><a class="account account--login" href="index.php">Se connecter</a></div>
    <div><a class="account account--creation" href="index.php">S'inscrire</a></div>
    <?php endif; ?>

    </div>
  </header>

  <?php if(isset($_GET['alert'])): ?>
  <div class="alert"><p><?php echo $_GET['alert'] ?></p></div>
  <?php endif; ?>

  <!--    MAIN    -->
  <main class="main">

    <div class="map">
      <img class="map_img" src="src/assets/img/map.jpg" alt="Carte">
    </div>

    <div class="job__form">
      <form class="main__jobs jobs" action="posterJobs.php" method="post">
        <textarea class="jobs__area" name="content" placeholder="Proposez un job..." required></textarea>
        <input class="jobs__button" type="submit" name="poster" value="POSTER">
      </form>
      <?php $allJob = App\Database::getAllJob();
            foreach ($allJob as $job): ?>
      <div class="all__job">
        <div class="job">
          <p class="name"><?= $job->getUser()->getFirstname() ?> <?= $job->getUser()->getLastname() ?></p>
          <div class="contenu"><?= $job->getContent(); ?></div>
          <p class="date"><?= $job->getDate(); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  
    <div class="pubs">
      <img class="pub" src="src/assets/img/pub1.svg" alt="Pub">
      <img class="pub pub--center" src="src/assets/img/pub2.svg" alt="Pub">
      <img class="pub" src="src/assets/img/pub3.svg" alt="Pub">
    </div>

  </main>


</body>

</html>