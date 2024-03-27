<?php
// Get the current hour
$current_hour = date("G");

// Check if it's morning (up to 11 AM)
if ($current_hour < 12) {
    echo "Good Morning";
} else {
    echo "Good Afternoon";
}
?>
