<?php

$dayOfWeek = date('w');
$dayName = date('l');

$colors = [
    0 => '#ff6666',  // Sunday
    1 => '#ffcc66',  // Monday
    2 => '#66ccff',  // Tuesday
    3 => '#99ff99',  // Wednesday
    4 => '#ff99ff',  // Thursday
    5 => '#ffff66',  // Friday
    6 => '#ccffcc',  // Saturday
];

$backgroundColor = $colors[$dayOfWeek] ?? '#ffffff'; 


echo "<div style='background-color: $backgroundColor;'>";
echo "Today is $dayName.";

?>
