<?php

require_once __DIR__ . '/bootstrap.php';

if($_POST['email'] != NULL && $_POST['password'] != NULL)
{
  $email = $_POST['email'];
  $mdp = $_POST['password'];

  $user = App\UserRepository::getUserByEmail($email);
  $correctPassword = password_verify($mdp, $user->getPassword());
  if ($correctPassword)
  {
    $_SESSION['user'] = $user;
    $alert = 'Vous êtes bien connecté !';
    header('Location: actualites.php?alert=' . $alert);
    exit();
  } else 
  {
    $alert = 'Mot de passe incorrect.';
    header('Location: index.php?alert=' . $alert);
    exit();
  } 
} else
{
  $alert = 'Remplissez les champs.';
  header('Location: index.php?alert=' . $alert);
  exit();
}