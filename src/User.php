<?php

namespace App;

class User
{
  private $valid = false;
  private $id;
  private $lastname;
  private $firstname;
  private $birthday;
  private $email;
  private $password;
  private $city;

  public function __construct($valid, $id, $lastname, $firstname, $birthday, $email, $password, $city)
  {
    $this->valid = $valid;
    $this->id = $id;
    $this->lastname = $lastname;
    $this->firstname = $firstname;
    $this->birthday = $birthday;
    $this->email = $email;
    $this->password = $password;
    $this->city = $city;
  }

  public function getLastname()
  {
    return $this->lastname;
  }
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;
  }

  public function getFirstname()
  {
    return $this->firstname;
  }
  public function setFirstname($firstname)
  {
    $this->firstname = $firstname;
  }

  public function getBirthday()
  {
    return $this->birthday;
  }
  public function setBirthday($birthday)
  {
    $this->birthday = $birthday;
  }

  public function getEmail()
  {
    return $this->email;
  }
  public function setEmail($email)
  {
    $this->email = $email;
    $email = trim($email);
    $email = stripcslashes($email);
    $email = htmlspecialchars($email);
  }

  public function getPassword()
  {
    return $this->password;
  }
  public function setPassword($password)
  {
    $this->password = $password;
    $password = password_hash();
    // Insérer la vérification / hachage
  }

  public function getCity()
  {
    return $this->city;
  }
  public function setCity($city)
  {
    $this->city = $city;
  }



  public function save()
  {
    if($valid = true)
    {
      $req = Database::$pdo->prepare('INSERT INTO user (lastname, firstname, birthday, email, password, city) VALUES (:lastname, :firstname, :birthday, :email, :password, :city)');
      $req->execute([
        'lastname' => $this->lastname,
        'firstname' => $this->firstname,
        'birthday' => $this->birthday,
        'email' => $this->email,
        'password' => $this->password,
        'city' => $this->city,
      ]);
    }
  }
}