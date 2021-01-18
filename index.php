<?php
require_once 'users.php';
require_once 'admin.php';

// Prova creazione primo utente senza attributi

$firstUser = new User();
var_dump($firstUser);

// Creazione secondo utente con attributi + try catch

$secondUser = new User('Luca', 'Rossi', 'lucarossi@gmail.com');


try {
  $secondUser->setAge(12);
} catch (Exception $e) {
  echo 'Errore | Messaggio =' . $e->getMessage();
}

var_dump($secondUser);

// Creazione terzo utente con qualche attributo

$thirdUser = new User('Claudio', 'Neri');

var_dump($thirdUser);

// Prova creazione primo Admin senza attributi

$firstAdmin = new Admin();

var_dump($firstAdmin);

// Prova creazione secondo Admin con attributi

$secondAdmin = new Admin('Paolo', 'Bianchi', 'pippo@gmail.com', 28);

var_dump($secondAdmin);

// Prova creazione terzo admin

$thirdAdmin = new Admin('Claudio', 'Verdi', 'paperino@gmail.com');

var_dump($thirdAdmin);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prima classe con extends</title>
  </head>
  <body>

    <h1>La lista degli utenti che han completato la registrazione è la seguente:</h1>

      <p><?php
          echo $secondUser->getName() . " " . $secondUser->getLastname();
        ?>
      </p>
      <p><?php
          echo $thirdUser->getName() . " " . $thirdUser->getLastname();
        ?>
      </p>
    <h1>La lista degli admin che han completato la registrazione è la seguente:</h1>

      <p><?php
          echo $secondAdmin->getName() . " " . $secondAdmin->getLastname() . " " .
          $secondAdmin->getEmail();
        ?>
      </p>
      <p><?php
          echo $thirdAdmin->getName() . " " . $thirdAdmin->getLastname() . " " .
          $thirdAdmin->getEmail();
        ?>
      </p>
  </body>
</html>
