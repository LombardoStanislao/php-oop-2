<?php

require_once 'users.php';



class Admin extends User {

private $emailAdmins = ['pippo@gmail.com', 'paperino@gmail.com', 'pluto@gmail.com', 'topolino@gmail.com'];

  function __construct($_name = "", $_lastname = "", $_email = "", $_age = 0) {
    if (!is_numeric($_email) && in_array($_email, $this->emailAdmins)) {

      $this->admin_permission = true;
    }

    parent::__construct($_name, $_lastname, $_email);
    
  }

  public function setEmail($_email) {

    if (!is_numeric($_email) && in_array($_email, $this->emailAdmins)) {

      $this->admin_permission = true;
    }
  }

}

?>
