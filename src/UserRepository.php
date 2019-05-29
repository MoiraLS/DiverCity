<?php

namespace App;

class UserRepository
{

  public static function getUser(int $id)
  {
    $req = Database::$pdo->prepare('SELECT * FROM user WHERE id = :id');
    $req->execute([
      'id' => $id,
    ]);

    $req->setFetchMode(\PDO::FETCH_CLASS, User::class);
    $user = $req->fetch();
    return $user;
  }

  public static function getUserByEmail(string $email)
  {
    $req = Database::$pdo->prepare('SELECT * FROM user WHERE email = :email');
    $req->execute([
      'email' => $email,
    ]);

    $req->setFetchMode(\PDO::FETCH_CLASS, User::class);
    $user = $req->fetch();
    return $user;
  }
  
}