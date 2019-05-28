<?php

$lastname = $firstname = $birthday = $email = $password = $passwordconfirm = $city = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lastname = $_POST["lastname"];
  $firstname = $_POST["firstname"];
  $birthday = $_POST["birthday"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $passwordconfirm = $_POST["passwordconfirm"];
  $city = $_POST["city"];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/assets/css/reset.css">
  <link rel="stylesheet" href="src/assets/css/signin.css">
  <title>DiverCity - Inscription</title>
</head>

<body>

<a href="index.php"><img class="logo" src="src/assets/img/Logo.svg" alt="Logo Divercity"></a>

<form class="infos" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h1 class="infos__title">S'INSCRIRE</h1>
    <input class="infos__user" type="text" name="lastname" placeholder="Nom*" value="<?php echo $lastname; ?>" required>
    <input class="infos__user" type="text" name="firstname" placeholder="Prénom*" value="<?php echo $firstname; ?>" required>
    <input class="infos__user" type="date" name="birthday" value="1990-01-01" value="<?php echo $birthday; ?>" required>
    <input class="infos__user" type="email" name="email" placeholder="Adresse mail*" value="<?php echo $email; ?>" required>
    <input class="infos__user" type="password" name="password" placeholder="Mot de passe*" value="<?php echo $password; ?>" required>
    <input class="infos__user" type="password" name="passwordconfirm" placeholder="Confirmation mot de passe*" value="<?php echo $passwordconfirm; ?>" required>
    <input class="infos__user" type="text" name="city" placeholder="Ville*" value="<?php echo $city; ?>" required>
    <label for="Justificatif de domicile">Justificatif de domicile</label>
    <input class="infos__user" type="file" name="Justificatif de domicile" placeholder="Justificatif de domicile" required>
    <input class="infos__button" type="submit" value="ENVOYER">
</form>

</body>

</html>