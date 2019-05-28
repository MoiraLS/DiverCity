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

<form class="infos" action="">
    <h1 class="infos__title">S'INSCRIRE</h1>
    <input class="infos__user" type="text" placeholder="Nom*" required>
    <input class="infos__user" type="text" placeholder="Prénom*" required>
    <input class="infos__user" type="date" value="1990-01-01" required>
    <input class="infos__user" type="email" placeholder="Adresse mail*" required>
    <input class="infos__user" type="password" placeholder="Mot de passe*" required>
    <input class="infos__user" type="password" placeholder="Confirmation mot de passe*" required>
    <input class="infos__user" type="text" placeholder="Ville*" required>
    <label for="Justificatif de domicile">Justificatif de domicile</label>
    <input class="infos__user" type="file" name="Justificatif de domicile" placeholder="Justificatif de domicile" required>
    <input class="infos__button" type="submit" value="ENVOYER">
</form>

</body>

</html>