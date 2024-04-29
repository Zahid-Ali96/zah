<?php

function customSort(&$array) {
    sort($array);
}

// Example usage:
$numbers = [5, 2, 8, 3, 1];
customSort($numbers);
print_r($numbers); // Output: [1, 2, 3, 5, 8]

?>
