<?php

namespace App;

class User
{
  private $valid = true;
  private $id;
  private $lastname;
  private $firstname;
  private $birthday;
  private $email;
  private $password;
  private $city;

  public function getId()
  {
    return $this->id;
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
    $email = trim($email);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $this->valid = false;
      return;
    }
    $this->email = $email;
  }

  public function getPassword()
  {
    return $this->password;
  }
  public function setPassword($password)
  {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $this->password = $password;
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
    if($this->valid)
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