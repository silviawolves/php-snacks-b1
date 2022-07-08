<?php

$arrayNumeriCasuali = [];

for ($i = 0; $i < 15; $i++) {
    $numeroCasuale = rand(1,100);
    if (!in_array($numeroCasuale ,$arrayNumeriCasuali)) {
        $arrayNumeriCasuali[] = $numeroCasuale;
    } else {
        $i--;
    }
}
var_dump($arrayNumeriCasuali);

?>

<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->