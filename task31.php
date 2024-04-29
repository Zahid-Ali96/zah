<?php

function calculateFactorial($number) {
    $factorial = 1;
    // Loop through numbers from 1 to $number and multiply each number to $factorial
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

// Test the function with a number
$number = 5; // Change this number to calculate factorial for a different number
$factorial = calculateFactorial($number);
echo "Factorial of $number is: $factorial";

?>
