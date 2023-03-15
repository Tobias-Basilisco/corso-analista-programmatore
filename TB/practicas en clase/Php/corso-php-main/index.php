<?php
include("library.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lezione php 27 febbraio</title>
    <style>
        h1 {
            text-align: center;
        }

        .evidente {
            border: 2px solid black;
            background-color: lightslategray;
            color: white;
            height: 40px;
            line-height: 40px;
            text-align: center;
            width: 50%;
            margin: 0 auto;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .alternata {
            border: 2px solid darkgreen;
            background-color: orange;
            color: blue;
            height: 40px;
            line-height: 40px;
            text-align: center;
            width: 50%;
            margin: 0 auto;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    // assegno un valore alla variabile
    $testo = "hello world!";

    // stampo il contenuto della variabile
    echo "<h1>" . $testo . "</h1>";

    // richiamo la funzione create_div
    // create_div("hello world", 6, "evidente");

    // esercizio - funzione che stampa div con classi alternate
    create_alt_div("esercizio", 10, "evidente", "alternata");
    ?>
</body>

</html>

<?php
$valore = -5;
$valore = valore_assoluto($valore);

$nuovo_valore = 7;
$nuovo_valore = valore_assoluto($nuovo_valore);

$valore3 = -0.06;
$valore3 = valore_assoluto($valore3);

?>