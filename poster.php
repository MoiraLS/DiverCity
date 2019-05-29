<?php

require __DIR__ . '/bootstrap.php';

if(isset($_POST['poster']))
{
  if (isset($_SESSION['user']))
  {
    $user_id = $_SESSION['user']->getId();
    $date = date('d-m-Y');
    $publication = new App\Publication;
    $publication->setId('');
    $publication->setContent($_POST['content']);
    $publication->setUser_id($user_id);
    $publication->setDate($date);
    $publication->save();
    echo $publication->getContent();
    $alert = 'Votre post a été publié !';
    header('Location: index.php?alert=' . $alert);
    exit();
  } else
  {
    $alert = 'Vous devez être connecté pour pouvoir publier.';
    header('Location: index.php?alert=' . $alert);
    exit();
  }
} else 
{
  $alert = 'Formulaire non envoyé.';
  header('Location: index.php?alert=' . $alert);
  exit();
}