<?php

// On va exécuter le bloc try 
// Si une exeption est lancée, le bloc catch sera ecécutée 
try {
  // Instantiation de PDO
  $pdo = new PDO(
    // msql:host=localhost;dbname=boutique;
    DB_SGBD . ':host=' . DB_HOST . ';dbname=' . DB_DBNAME . ';', 
    DB_USER, 
    DB_PASS, 
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    ]
    );


} catch (Exeption $e) {
  // Les exceptions sont des erreurs 
  // présentées sous forme d'objet

  // die est une instruction qui permet d'arrêter le script 
  die('Erreur de connexion à la base de données: ' . $e->getMessage()); 
}