<?php

function isLowercase($string) {
    return $string === strtolower($string);
}

// Example usage:
$string1 = "hello";
$string2 = "Hello";

echo "'$string1' is all lowercase: " . (isLowercase($string1) ? "Yes" : "No") . "<br>"; // Output: 'hello' is all lowercase: Yes
echo "'$string2' is all lowercase: " . (isLowercase($string2) ? "Yes" : "No") . "<br>"; // Output: 'Hello' is all lowercase: No

?>
