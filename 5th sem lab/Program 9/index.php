<?php

// Function to check if a number is prime
function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Function to generate prime numbers and Fibonacci series up to a given limit
function generatePrimesAndFibonacci($limit) {
    $primes = array();
    $fibonacci = array(0, 1);

    for ($i = 2; $i <= $limit; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }

        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return array('primes' => $primes, 'fibonacci' => $fibonacci);
}

// Example usage:
$maxValue = 10;

$results = generatePrimesAndFibonacci($maxValue);

echo "Prime numbers up to $maxValue: ";
echo implode(', ', $results['primes']) . "\n";

echo "Fibonacci series up to $maxValue terms: ";
echo implode(', ', $results['fibonacci']) . "\n";

?>
