<?php

require_once 'users.php';

class Admins extends Users {

  function __construct($_name = "", $_lastname = "", $_email = "", $_age = 0) {

    parent::__construct($_name = "", $_lastname = "", $_email = "") {
      $this->age = $_age
    }

  }

  public function setEmail($_email) {
    if (!is_numeric($_email) && in_array($_email, $emailAdmins)) {
      $this->name = $_email;
      $this->admin_permission = 1;
    }
  }

}

?>
