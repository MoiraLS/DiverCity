<?php

require __DIR__ . '/bootstrap.php';

if(isset($_POST['poster']))
{
  if (isset($_SESSION['user']))
  {
    $user_id = $_SESSION['user']->getId();
    $date = date('d-m-Y');
    $evenement = new App\Evenement;
    $evenement->setId('');
    $evenement->setContent($_POST['content']);
    $evenement->setUser_id($user_id);
    $evenement->setDate($date);
    $evenement->save();
    echo $evenement->getContent();
    $alert = 'Votre post a été publié !';
    header('Location: evenements.php?alert=' . $alert);
    exit();
  } else
  {
    $alert = 'Vous devez être connecté pour pouvoir publier.';
    header('Location: evenements.php?alert=' . $alert);
    exit();
  }
} else 
{
  $alert = 'Formulaire non envoyé.';
  header('Location: evenements.php?alert=' . $alert);
  exit();
}