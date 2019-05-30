<?php

require __DIR__ . '/bootstrap.php';

if (isset($_POST['deconnecter']))
{
  session_destroy();
  $alert = 'Vous êtes bien déconnecté !';
  header('Location: actualites.php?alert=' . $alert);
  exit();
} else
{
  $alert = 'Formulaire non envoyé';
  header('Location: actualites.php?alert=' . $alert);
  exit();
}