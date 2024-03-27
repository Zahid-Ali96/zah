<?php
// Using for loop
echo "Count using for loop: ";
for ($i = 5; $i <= 15; $i++) {
    echo $i . " ";
}
echo "<br>";

// Using while loop
echo "Count using while loop: ";
$i = 5;
while ($i <= 15) {
    echo $i . " ";
    $i++;
}
echo "<br>";

// Using do...while loop
echo "Count using do...while loop: ";
$i = 5;
do {
    echo $i . " ";
    $i++;
} while ($i <= 15);
?>
