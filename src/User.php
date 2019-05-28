<?php

namespace App;

class User
{
  private $id;
  private $lastname;
  private $firstname;
  private $birthday;
  private $email;
  private $password;
  private $city;

  public function __construct($id, $lastname, $firstname, $birthday, $email, $password, $city)
  {
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
    $birthday = $_POST['birthday'];
  }
  public function getEmail()
  {
    $email = $_POST['email'];
  }
  public function getPassword()
  {
    $password = $_POST['password'];
  }
  public function getCity()
  {
    $city = $_POST['city'];
  }

  public function validate()
  {
    //   $var = trim($var); //permet de verfifier qu'il n'y ai pas d'espaces, TAB, le fait d'aller à la ligne 
    //   $var = stripcslashes($var); // enleve tout les anti slash
    //   $var = htmlspecialchars($var); // sercurisation de la faille XSS
  }

  public function save()
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