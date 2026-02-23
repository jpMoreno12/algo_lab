<?php

function soma(int $a, int $b) {
    return $a + $b;
}

$caseTests = [
    [1, 3, 2, false],
    [2, 2, 4, true],
    [3, 3, 10, false],
];


for($i=0; $i < count($caseTests); $i++) {
    $caseTest = $caseTests[$i];

    $sum = soma($caseTest[0], $caseTest[1]);

    if($caseTest[2] === $sum)  {
        echo "teste passou $sum \n\n";
    }
    else {
        echo "teste nao passou $sum" . " esperado " . $caseTest[2] . " obteve " . (string)$caseTest[3] . "\n\n";
    }

}
