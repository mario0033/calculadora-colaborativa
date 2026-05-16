<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['operacion'];

if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Error: números inválidos";
    exit;
}

if ($op == "suma") {
    echo $num1 + $num2;
}

if ($op == "resta") {
    echo $num1 - $num2;
}

if ($op == "multiplicacion") {
    echo $num1 * $num2;
}

if ($op == "division") {
    if ($num2 == 0) {
        echo "No se puede dividir entre 0";
    } else {
        echo $num1 / $num2;
    }
}

?>