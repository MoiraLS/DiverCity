<?php

namespace App;

class Evenement
{
  private $id;
  private $content;
  private $user_id;
  private $date;
  private $user = NULL;

  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getContent()
  {
    $Parsedown = new \Parsedown();
    $Parsedown->setSafeMode(true);
    return $Parsedown->text($this->content);
  }
  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getUser_id()
  {
    return $this->user_id;
  }
  public function setUser_id($user_id)
  {
    $this->user_id = $user_id;
  }
  
  public function getDate()
  {
    return $this->date;
  }
  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getUser()
  {
    if ($this->user === NULL)
    {
      $this->user = UserRepository::getUser($this->user_id);
    }
    return $this->user;
  }

  public function save()
  {
    $req = Database::$pdo->prepare('INSERT INTO evenements (content, author, date) VALUES (:content, :user_id, :date)');
    $req->execute([
      'content' => $this->content,
      'user_id' => $this->user_id,
      'date' => $this->date,
    ]);
  }
}