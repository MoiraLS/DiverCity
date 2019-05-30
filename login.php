<?php
require __DIR__ . '/bootstrap.php';

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
  <link rel="stylesheet" href="src/assets/css/reset.css">
  <link rel="stylesheet" href="src/assets/css/account.css">
  <title>DiverCity - Connection</title>
</head>

<body>

<a href="actualites.php"><img class="logo" src="src/assets/img/Logo.svg" alt="Logo Divercity"></a>
<?php 
if (isset($_GET['alert']))
{
?>
<p><?php echo $_GET['alert']; ?></p>
<?php
}
?>

<form class="login" method="post" action="connexion.php"> 
    <h1 class="infos__title">SE CONNECTER</h1>

    <input class="infos__user" type="email" name="email" placeholder="Adresse mail*" value="<?php echo $_POST['email'] ?? ''; ?>" required>

    <input class="infos__user" type="password" name="password" placeholder="Mot de passe*" required>

    <input class="infos__button" type="submit" name="login" value="CONNEXION">
</form>

</body>

</html>