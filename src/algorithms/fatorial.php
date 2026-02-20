<?php

// o que é o fatorial?

// o resultado do fatorial é um x * x - 1, até que o x - 1 seja = 1

// como que funciona o fatorial

// ex 5:

// 5 * 4 = 20
// 20 * 3 = 60
// 60 * 2 = 120
// 120 * 1 = 120

$x = 5;
$result = 1;
$temp = 0;


while($result <= $x) {
    //5
    //20
    $result *= $x;
    $x--;
}echo $result
?>

