<?php

namespace App;

class Database
{
  private const SGBD = 'mysql';
  private const HOST = 'localhost';
  private const NAME = 'divercity';
  private const USER = 'root';
  private const PASS = 'root';
  public static $pdo;

  public static function connect ()
  {
    try {
      // Instantiation de PDO
      self::$pdo = new \PDO(
        // msql:host=localhost;dbname=boutique;
        self::SGBD . ':host=' . self::HOST . ';dbname=' . self::NAME . ';', 
        self::USER, 
        self::PASS, 
        [
          \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
        ]
        );
    
    
    } catch (\Exeption $e) {
      // Les exceptions sont des erreurs 
      // présentées sous forme d'objet
    
      // die est une instruction qui permet d'arreter le script 
      die('Erreur de connexion à la base de données: ' . $e->getMessage()); 
    }
  }

  public static function getAllPublication()
  {
    $stmt = self::$pdo->query("SELECT * FROM publication order by date desc;");
    $allPublicationSQL = $stmt->fetchAll();
    $allPublication = [];
    foreach ($allPublicationSQL as $value) {
      $publication = new Publication;
      $publication->setId($value['id']);
      $publication->setContent($value['content']);
      $publication->setUser_id($value['author']);
      $publication->setDate($value['date']);
      array_push($allPublication, $publication);
    }
    return $allPublication;
  }

  public static function getAllEvenement()
  {
    $stmt = self::$pdo->query("SELECT * FROM evenements order by date desc;");
    $allEvenementSQL = $stmt->fetchAll();
    $allEvenement = [];
    foreach ($allEvenementSQL as $value) {
      $evenement = new Evenement;
      $evenement->setId($value['id']);
      $evenement->setContent($value['content']);
      $evenement->setUser_id($value['author']);
      $evenement->setDate($value['date']);
      array_push($allEvenement, $evenement);
    }
    return $allEvenement;
  }

  public static function getAllJob()
  {
    $stmt = self::$pdo->query("SELECT * FROM job order by date desc;");
    $allJobSQL = $stmt->fetchAll();
    $allJob = [];
    foreach ($allJobSQL as $value) {
      $job = new Job;
      $job->setId($value['id']);
      $job->setContent($value['content']);
      $job->setUser_id($value['author']);
      $job->setDate($value['date']);
      array_push($allJob, $job);
    }
    return $allJob;
  }
}