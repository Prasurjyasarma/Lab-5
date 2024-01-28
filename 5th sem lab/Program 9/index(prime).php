<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function generatePrimes($n) {
    $primes = [];

    for ($i = 2; $i <= $n; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}

// Set the value of n
$n = 10;

// Generate and display prime numbers up to n
$primeNumbers = generatePrimes($n);

echo "Prime numbers up to $n: " . implode(', ', $primeNumbers);
?>
