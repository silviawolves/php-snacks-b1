<?php

$semifinali = [
    [
        'squadraCasa' => 'Pallacanestro Varese',
        'squadraOspite' => 'Olimpia Milano',
        'puntiCasa' => '88',
        'puntiOspite' => '23'
    ],
    [
        'squadraCasa' => 'Fortitudo Pallacanestro',
        'squadraOspite' => 'Pallacanestro Reggiana',
        'puntiCasa' => '24',
        'puntiOspite' => '67'
    ],
    [
        'squadraCasa' => 'Aquila Basket Trento',
        'squadraOspite' => 'Pallacanestro Brescia',
        'puntiCasa' => '12',
        'puntiOspite' => '92'
    ],
    [
        'squadraCasa' => 'Virtus Pallacanestro',
        'squadraOspite' => 'Reyer Venezia',
        'puntiCasa' => '51',
        'puntiOspite' => '34'
    ],
    [
        'squadraCasa' => 'Derthona Basket',
        'squadraOspite' => 'Allianz Pallacanestro',
        'puntiCasa' => '63',
        'puntiOspite' => '65'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

    <?php for ($i = 1; $i < count($semifinali); $i++) {
        $partite = $semifinali[$i];
    ?>
    
    <h3><?php echo $partite['squadraCasa'] . ' - ' . $partite['squadraOspite'] ?> | <?php echo $partite['puntiCasa'] . '-' . $partite['puntiOspite'] ?></h3>
    
    <?php } ?>
    
</body>
</html>

<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->