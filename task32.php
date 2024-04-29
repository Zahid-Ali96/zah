<?php

$row = 1;
$maxRows = 8; // Change this value to adjust the number of rows

while ($row <= $maxRows) {
    $column = 1;
    while ($column <= $row) {
        echo "*";
        $column++;
    }
    echo "<br>";
    $row++;
}

?>
