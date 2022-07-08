<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$accesso = false;

if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
    $accesso = true;
    echo '<h2>Accesso riuscito</h2>';
} else {
    echo '<h2>Accesso Negato</h2>';
}

?>

<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->