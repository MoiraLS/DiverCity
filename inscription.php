<?php

require_once __DIR__ . '/bootstrap.php';

if(!isset($_POST['lastname']))
{
  $alert = 'Veuillez renseigner votre nom';
  header('Location: signin.php?alert=' . $alert);
  exit();
} elseif(!isset($_POST['firstname']))
{
  $alert = 'Veuillez renseigner votre prénom';
  header('Location: signin.php?alert=' . $alert);
  exit();
} elseif(!isset($_POST['birthday']))
{
  $alert = 'Veuillez renseigner votre date de naissance';
  header('Location: signin.php?alert=' . $alert);
  exit();
} elseif(!isset($_POST['email']))
{
  $alert = 'Veuillez renseigner votre email';
  header('Location: signin.php?alert=' . $alert);
  exit();
} elseif(!isset($_POST['password']))
{
  $alert = 'Veuillez renseigner votre mot de passe';
  header('Location: signin.php?alert=' . $alert);
  exit();
} elseif(!isset($_POST['passwordconfirm']))
{
  $alert = 'Veuillez confirmer votre mot de passe';
  header('Location: signin.php?alert=' . $alert);
  exit();
} elseif(!isset($_POST['city']))
{
  $alert = 'Veuillez renseigner votre ville';
  header('Location: signin.php?alert=' . $alert);
  exit();
}