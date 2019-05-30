<?php

require __DIR__ . '/bootstrap.php';

if(isset($_POST['poster']))
{
  if (isset($_SESSION['user']))
  {
    $user_id = $_SESSION['user']->getId();
    $date = date('d-m-Y');
    $job = new App\Job;
    $job->setId('');
    $job->setContent($_POST['content']);
    $job->setUser_id($user_id);
    $job->setDate($date);
    $job->save();
    echo $job->getContent();
    $alert = 'Votre post a été publié !';
    header('Location: jobs.php?alert=' . $alert);
    exit();
  } else
  {
    $alert = 'Vous devez être connecté pour pouvoir publier.';
    header('Location: jobs.php?alert=' . $alert);
    exit();
  }
} else 
{
  $alert = 'Formulaire non envoyé.';
  header('Location: jobs.php?alert=' . $alert);
  exit();
}