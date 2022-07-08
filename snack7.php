<?php

$classe65 = [
    [
        'nome' => 'Alma',
        'cognome' => 'Fiano',
        'voti' => [
            'matematica' => 6,
            'inglese' => 9,
            'italiano' => 8,
            'latino' => 6,
            'fisica' => 6,
            'arte' => 9,
        ]
    ],
    [
        'nome' => 'Milo',
        'cognome' => 'Fiano',
        'voti' => [
            'matematica' => 8,
            'inglese' => 6,
            'italiano' => 6,
            'latino' => 4,
            'fisica' => 8,
            'arte' => 7,
        ]
    ],
    [
        'nome' => 'Leonardo',
        'cognome' => 'Rossi',
        'voti' => [
            'matematica' => 6,
            'inglese' => 6,
            'italiano' => 6,
            'latino' => 5,
            'fisica' => 4,
            'arte' => 8,
        ]
    ],
    [
        'nome' => 'Astrid',
        'cognome' => 'Revere',
        'voti' => [
            'matematica' => 9,
            'inglese' => 7,
            'italiano' => 7,
            'latino' => 6,
            'fisica' => 9,
            'arte' => 6,
        ]
    ],
    [
        'nome' => 'Pedro',
        'cognome' => 'Pascal',
        'voti' => [
            'matematica' => 5,
            'inglese' => 7,
            'italiano' => 7,
            'latino' => 6,
            'fisica' => 3,
            'arte' => 7,
        ]
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>


<body>

    <div class="container">
        <div class="row">

        <?php for ($i = 0; $i < count($classe65); $i++) {
            $studente = $classe65[$i]; 
            $listaVoti = $studente['voti'];
            $mediaVoti = array_sum($listaVoti) / count($listaVoti);
            ?>

            <div class="col">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="card-title"> <?php echo $studente['nome'] . ' ' . $studente['cognome'] ?></div>
                        <div class="card-text"> <?php echo round($mediaVoti, 1) ?></div>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>
    </div>
    
</body>
</html>

<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->