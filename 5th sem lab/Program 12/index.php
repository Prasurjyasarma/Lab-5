<?php
$users = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Jane', 'age' => 30],
    ['name' => 'Alice', 'age' => 22],
    ['name' => 'Bob', 'age' => 28],
];

function search($users, $criteria, $value) {
    return array_filter($users, fn($user) => $user[$criteria] === $value || strpos(strtolower($user[$criteria]), strtolower($value)) !== false);
}

$searchName = 'Alice';
$searchAge = 28;

echo "Searching users by name: $searchName<br/>";
$nameResults = search($users, 'name', $searchName);
printResults($nameResults);

echo "<br/>Searching users by age: $searchAge<br/>";
$ageResults = search($users, 'age', $searchAge);
printResults($ageResults);

function printResults($results) {
    echo empty($results) ? "No results found.<br/>" : implode("<br/>", array_map(fn($result) => "Name: {$result['name']}, Age: {$result['age']}", $results));
}
?>
