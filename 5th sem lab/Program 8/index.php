<!DOCTYPE html>
<html>
<head>
    <title>Change Background Color</title>
    <style>
        body {
            text-align: center;
            font-size: 24px;
            padding: 50px;
        }
    </style>
</head>
<body>

<?php
// Get the current day of the week (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
$dayOfWeek = date('w');

// Define an array with background colors corresponding to each day of the week
$colors = array(
    'Sunday' => '#ff6666',
    'Monday' => '#ffcc66',
    'Tuesday' => '#66ccff',
    'Wednesday' => '#99ff99',
    'Thursday' => '#ff99ff',
    'Friday' => '#ffff66',
    'Saturday' => '#ccffcc'
);

// Get the day name based on the day of the week
$dayName = date('l', strtotime("Sunday +{$dayOfWeek} days"));

// Set the background color based on the day of the week
if (array_key_exists($dayName, $colors)) {
    $backgroundColor = $colors[$dayName];
} else {
    $backgroundColor = '#ffffff'; // Default color for unknown days
}

// Output the result
echo "<div style='background-color: {$backgroundColor};'>";
echo "Today is {$dayName}.";
echo "</div>";
?>

</body>
</html>
