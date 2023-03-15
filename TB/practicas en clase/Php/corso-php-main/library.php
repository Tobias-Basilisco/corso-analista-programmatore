<?php
//è buona norma inserire un commento all'inizio del file che ne descrive le funzionalità 
//esempio: in questo file metto le definizioni delle funzioni che andrò a richiamare negli altri file

function valore_assoluto($numero)
{
    echo "Il valore assoluto di " . $numero;
    if ($numero < 0) {
        $risultato = $numero * -1;
    } else {
        $risultato = $numero;
    }
    echo " è " . $risultato . "<br>";
}

function print_div($classe, $contenuto, $id = "")
{
    echo "<div class='" . $classe . "'";
    if ($id != "") {
        echo " id='" . $id . "'";
    }
    echo  ">";
    echo $contenuto;
    echo "</div>";
}

function print_sentence($times, $sentence)
{
    echo "<p class='sentence-container'>";
    for ($i = 1; $i <= $times; $i++) {
        echo $sentence . "<br>";
    }
    echo "</p>";
}

function create_div($text, $divs, $class)
{
    for ($i = 1; $i <= $divs; $i++) {
        print_div($class, $text);
    }
}

function create_alt_div($text, $divs, $class1, $class2)
{
    for ($i = 1; $i <= $divs; $i++) {
        if ($i % 2 == 0) {
            print_div($class2, $text);
        } else {
            print_div($class1, $text);
        }
    }
}

function print_array($values) {
    $array_count = count($values);
    for ($i = 0; $i < $array_count; $i++) {
        echo "<div>";
        echo $values[$i];
        echo "</div>";
    }
}

function print_double_array($first, $second) {
    if (count($first) != count($second)) {
        return 0;
    } else {
        $array_count = count($first);
        for ($i = 0; $i < $array_count; $i++) {
            echo "<div class='" . $first[$i] . "'>";
            echo $second[$i];
            echo "</div>";
        }
    }
}
?>