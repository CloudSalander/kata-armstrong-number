<?php
function isArmstrongNumber(int $number): bool {
    $number_of_figures = getNumberofFigures($number).PHP_EOL;
    $figures_sum = getFiguresPowerToN($number, $number_of_figures);
    if($number === $figures_sum) return true;
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

function getFiguresPowerToN(int $number,int $number_of_figures): int {
    $sum = 0;
    while(intdiv($number,10) > 0) {
        $sum += ($number%10) ** $number_of_figures;
        $number = intdiv($number,10);
    }
    return $sum + $number**$number_of_figures;
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