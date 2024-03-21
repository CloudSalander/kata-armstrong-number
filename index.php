<?php
function isArmstrongNumber(int $number): bool {
    return false
}

$number = readline("Give me a number! :)")
//TODO: Input validation. Ensure its a valid number
if(isArmstrongNumber($number)) {
    echo $number." is an Armstrong number!";
}

else {
    echo $number." Sorry! you are not good enough to be an Armstrong number!";
}


?>