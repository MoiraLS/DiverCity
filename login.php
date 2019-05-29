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

<a href="index.php"><img class="logo" src="src/assets/img/Logo.svg" alt="Logo Divercity"></a>

<form class="infos" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
    <h1 class="infos__title">SE CONNECTER</h1>

    <input class="infos__user" type="email" name="email" placeholder="Adresse mail*" value="<?php echo $email; ?>" required>
    <p class="error"><?php echo $emailError; ?></p>

    <input class="infos__user" type="password" name="password" placeholder="Mot de passe*" value="<?php echo $password; ?>" required>
    <p class="error"><?php echo $passwordError; ?></p>

    <input class="infos__button" type="submit" name="register" value="CONNEXION">
</form>

</body>

</html>