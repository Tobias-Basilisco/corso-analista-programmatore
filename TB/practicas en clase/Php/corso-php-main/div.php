<?php
include("library.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esercizio 27 febbraio</title>
    <style>
        .container {
            border: 2px solid black;
            min-height: 40px;
            line-height: 40px;
            width: 50%;
            text-align: center;
            margin: 0 auto;
            margin-bottom: 15px;
        }

        .sentence-container {
            background-color: #393939;
            color: white;
            border: 2px solid black;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 18px;
            margin: 0 auto;
            margin-bottom: 20px;
            width: 50%;
        }

        #red {
            background-color: red;
        }
    </style>
</head>

<body>
    <div>
        <?php

        for ($i = 1; $i <= 20; $i++) {
            if ($i != 5) {
                print_div("container", $i);
            } else {
                print_div("container", $i, "red");
            }
        }

        ?>
    </div>

    <?php
    print_sentence(3, "Ciao Cescot");
    ?>

    <?php
    print_sentence(2, "Ciao mondo");
    ?>

</body>

</html>