<?php

class Users {
  private $name;
  private $lastname;
  private $age;
  protected $email;
  protected $admin_permission = 0;

  function __construct($_name = "", $_lastname = "", $_email = "") {

    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->email = $_email;

  }

  public function setName($_name) {

    if (!is_numeric($_name)) {
      $this->name = $_name;
    }

  }

  public function getName() {
    return $this->name;
  }

  public function setLastname($_lastname) {
    if (!is_numeric($_lastname)) {
      $this->lastname = $_lastname;
    }
  }

  public function getLastname() {
    return $this->lastname;
  }

  public function setEmail($_email) {
    if (!is_numeric($_email)) {
      $this->email = $_email;
    }
  }

  public function getName() {
    return $this->email;
  }

}

?>
