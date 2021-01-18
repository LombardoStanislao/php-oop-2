<?php
require_once 'users.php';
require_once 'admin.php';

$emailAdmins = ['pippo@gmail.com', 'paperino@gmail.com', 'pluto@gmail.com', 'topolino@gmail.com'];

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
$secondAdmin->setEmail('pippo@gmail.com');

var_dump($secondAdmin);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prima classe con extends</title>
  </head>
  <body>

  </body>
</html>
