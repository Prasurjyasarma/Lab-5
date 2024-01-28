<?php
function divide($numerator, $denominator) {
    return $denominator ? $numerator / $denominator : throw new Exception("Cannot divide by zero");
}

function validateDateFormat($dateString) {
    return DateTime::createFromFormat('Y-m-d', $dateString) ?: throw new Exception("Invalid date format. Use 'Y-m-d'");
}

try {
    $result = divide(10, 0);
    echo "Result of division: $result <br/>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() ;
}

try {
    $dateString = '2024-01-27';
    $dateObject = validateDateFormat($dateString);
    echo "Valid date: " . $dateObject->format('Y-m-d') . "<br/>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br/>";
}
?>

