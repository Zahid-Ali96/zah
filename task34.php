<?php

// Array with list of month names
$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

// Value to be deleted
$valueToDelete = "February";

echo "Original array: <br>";
print_r($months);
echo "<br><br>";

// Using foreach loop to find and remove the value from the array
foreach ($months as $key => $value) {
    if ($value === $valueToDelete) {
        unset($months[$key]);
    }
}

echo "Array after removing '$valueToDelete': <br>";
print_r($months);

?>
