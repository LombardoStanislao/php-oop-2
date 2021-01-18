<?php

class User {
  private $name;
  private $lastname;
  private $age;
  protected $email;
  protected $admin_permission = false;

  function __construct($_name = "", $_lastname = "", $_email = "") {

    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->email = $_email;

  }

  public function setName($_name) {

    if (!is_numeric($_name)) {
      $this->name = $_name;
    } else {
      throw new Exception("Bisogna inserire testo, non numeri");

    }

  }

  public function getName() {
    return $this->name;
  }

  public function setLastname($_lastname) {
    if (!is_numeric($_lastname)) {
      $this->lastname = $_lastname;
    } else {
      throw new Exception("Bisogna inserire testo, non numeri");

    }
  }

  public function getLastname() {
    return $this->lastname;
  }

  public function setAge($_age) {
    if (is_numeric($_age)) {
      $this->age = $_age;
    } else {
      throw new Exception("Non è stato inserito un numero");

    }
  }

  public function getAge() {
    return $this->age;
  }

  public function setEmail($_email) {
    if (!is_numeric($_email)) {
      $this->email = $_email;
    }
  }

  public function getEmail() {
    return $this->email;
  }

}

?>
