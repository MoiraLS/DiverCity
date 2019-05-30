<?php
require __DIR__ . '/bootstrap.php';

if(isset($_POST['register']))
{
  $user = new App\User;
  $user->setLastname($_POST['lastname']);
  $user->setFirstname($_POST['firstname']);
  $user->setBirthday($_POST['birthday']);
  $user->setEmail($_POST['email']);
  $user->setPassword($_POST['password']);
  $user->setCity($_POST['city']);
  $user->save();
}

if(isset($_POST['login']))
{
  $user = App\UserRepository::getUserByEmail($_POST['email']);
  if ($user !== false) {
    if (password_verify($_POST['password'], $user->getPassword())) {
      $_SESSION['user_id'] = $user->getId();
      header('Location: actualites.php');
    }
  }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
  <link rel="stylesheet" href="src/assets/css/reset.css">
  <link rel="stylesheet" href="src/assets/css/index.css">
  <title>DiverCity</title>
</head>

<body>

  <div class="brand">
    <div class="brand__infos">
      <img class="logo" src="src/assets/img/Logo.png" alt="Logo">
      <h1 class="title"><strong>Votre</strong> ville, <strong>vos</strong> actu’</h1>
    </div>
    <div class="buttons">
      <div id="connexion" class="connexion">CONNEXION</div>
      <div id="inscription" class="inscription">INSCRIPTION</div>
    </div>
  </div>

  <p class="accroche">Rejoignez nous et découvrez tout<br>ce qui se passe dans votre ville !</p>
  <img class="buildings" src="src/assets/img/buildings.png" alt="Buildings">

  <form id="formInscription" class="none" method="post"
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <h1 class="infos__title">INSCRIPTION</h1>

    <input class="infos__user" type="text" name="lastname" placeholder="Nom*"
      value="<?php echo $_POST['lastname'] ?? ''; ?>" required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>
    <input class="infos__user" type="text" name="firstname" placeholder="Prénom*"
      value="<?php echo $_POST['firstname'] ?? ''; ?>" required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>

    <input class="infos__user" type="text" name="birthday" value="1990-01-01"
      value="<?php echo $_POST['birthday'] ?? ''; ?>" required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>

    <input class="infos__user" type="email" name="email" placeholder="Adresse mail*"
      value="<?php echo $_POST['email'] ?? ''; ?>" required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>

    <input class="infos__user" type="password" name="password" placeholder="Mot de passe*" required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>

    <input class="infos__user" type="password" name="passwordconfirm" placeholder="Confirmation mot de passe*" required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>

    <input class="infos__user" type="text" name="city" placeholder="Ville*" value="<?php echo $_POST['city'] ?? ''; ?>"
      required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>

    <label for="Justificatif de domicile">Justificatif de domicile</label>
    <input class="infos__user" type="file" name="Justificatif de domicile" placeholder="Justificatif de domicile">

    <input class="infos__button" type="submit" name="register" value="ENVOYER">
  </form>
  <!--    FIN FORM INSCRIPTION -->

  <?php 
  if (isset($_GET['alert']))
  {
  ?>
  <p><?php echo $_GET['alert']; ?></p>
  <?php
  }
  ?>

  <form id="formConnexion" class="none" method="post" action="connexion.php">
    <h1 class="infos__title">CONNEXION</h1>

    <input class="infos__user" type="email" name="email" placeholder="Adresse mail*"
      value="<?php echo $_POST['email'] ?? ''; ?>" required>

    <input class="infos__user" type="password" name="password" placeholder="Mot de passe*" required>

    <input class="infos__button" type="submit" name="login" value="CONNEXION">
  </form>
  <!--    FIN FORM CONNEXION    -->

</body>

<script src="src/assets/js/main.js"></script>

</html>