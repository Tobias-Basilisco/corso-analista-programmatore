<?php 
 require_once("library.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi con gli array in PHP</title>
    <style>
        div {
            padding: 20px;
            width: fit-content;
        }
        .verde {
            border: 2px solid green;
        }
        .rosso {
            border: 2px solid red;
        }
        .viola {
            border: 2px solid purple;
        }
    </style>
</head>
<body>
    <?php 
        $primo_array = array("Io", "sono", "leggenda");

        echo "<p>L'array contiene " . count($primo_array) . " elementi</p>";
        echo "<p>Il primo elemento è '" . $primo_array[0] . "'</p>";
        echo "<p>Il secondo elemento è '" . $primo_array[1] . "'</p>";
        echo "<p>Il terzo elemento è '" . $primo_array[2] . "'</p>";
        echo "<p>Qui li stampo tutti di fila: " . $primo_array[0] . $primo_array[1] . $primo_array[2];

        echo "<br>";

        $array_count = count($primo_array);
        for ($i = 0; $i < $array_count; $i++) {
            echo $primo_array[$i] . " ";
        }

        print_array($primo_array);

        echo "<br>";

        $array1 = ["verde", "rosso", "viola"];
        $array2 = ["sono", "un", "esercizio"];
        print_double_array($array1, $array2);
    ?>
</body>
</html>