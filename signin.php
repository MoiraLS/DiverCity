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

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/assets/css/reset.css">
  <link rel="stylesheet" href="src/assets/css/account.css">
  <title>DiverCity - Inscription</title>
</head>

<body>

<a href="index.php"><img class="logo" src="src/assets/img/Logo.svg" alt="Logo Divercity"></a>

<form class="infos" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
    <h1 class="infos__title">S'INSCRIRE</h1>
   
    <input class="infos__user" type="text" name="lastname" placeholder="Nom*" value="<?php echo $_POST['lastname'] ?? ''; ?>" required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>
    <input class="infos__user" type="text" name="firstname" placeholder="Prénom*" value="<?php echo $_POST['firstname'] ?? ''; ?>" required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>

    <input class="infos__user" type="text" name="birthday" value="1990-01-01" value="<?php echo $_POST['birthday'] ?? ''; ?>" required>
    <?php 
    if (isset($_GET['alert']))
    {
    ?>
    <p class="alert"><?php echo $_GET['alert']; ?></p>
    <?php
    }
    ?>

    <input class="infos__user" type="email" name="email" placeholder="Adresse mail*" value="<?php echo $_POST['email'] ?? ''; ?>" required>
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

    <input class="infos__user" type="text" name="city" placeholder="Ville*" value="<?php echo $_POST['city'] ?? ''; ?>" required>
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

</body>

</html>