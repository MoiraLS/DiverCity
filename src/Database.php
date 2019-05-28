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
}