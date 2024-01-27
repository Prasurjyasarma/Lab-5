<?php

// Sample user data
$users = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Jane', 'age' => 30],
    ['name' => 'Alice', 'age' => 22],
    ['name' => 'Bob', 'age' => 28],
];

// Function to search users by name
function searchByName($users, $query) {
    $results = [];
    foreach ($users as $user) {
        if (strpos(strtolower($user['name']), strtolower($query)) !== false) {
            $results[] = $user;
        }
    }
    return $results;
}

// Function to search users by age
function searchByAge($users, $query) {
    $results = [];
    foreach ($users as $user) {
        if ($user['age'] == $query) {
            $results[] = $user;
        }
    }
    return $results;
}

// Example usage:
$searchName = 'Alice';
$searchAge = 28;

echo "Searching users by name: $searchName<br/>";
$nameResults = searchByName($users, $searchName);
printResults($nameResults); 

echo "<br/>Searching users by age: $searchAge<br/>";
$ageResults = searchByAge($users, $searchAge);
printResults($ageResults);

// Function to print search results
function printResults($results) {
    if (empty($results)) {
        echo "No results found.<br/>";
    } else {
        foreach ($results as $result) {
            echo "Name: {$result['name']}, Age: {$result['age']}<br/>";
        }
    }
}

?>
