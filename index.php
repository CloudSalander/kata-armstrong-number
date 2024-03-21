<?php
function isArmstrongNumber(int $number): bool {
    echo getNumberofFigures($number).PHP_EOL;
    return false;
}

function getNumberofFigures(int $number): int {
    $number_of_figures = 0;
    while(intdiv($number, 10) > 0) {
        ++$number_of_figures;
        $number = intdiv($number,10);
    }
    return $number_of_figures+1;
}


$number = readline("Give me a number! :)");
//TODO: Input validation. Ensure its a valid number
if(isArmstrongNumber($number)) {
    echo $number." is an Armstrong number!";
}

else {
    echo $number." Sorry! you are not good enough to be an Armstrong number!";
}


?>