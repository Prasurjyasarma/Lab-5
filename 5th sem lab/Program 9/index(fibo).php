<?php
function generateFibonacci($n) {
    $fibonacciSeries = [];

    $first = 0;
    $second = 1;

    for ($i = 0; $i < $n; $i++) {
        $fibonacciSeries[] = $first;

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }

    return $fibonacciSeries;
}

// Set the number of terms in the Fibonacci series
$n = 10;

// Generate and display the Fibonacci series
$fibonacciSeries = generateFibonacci($n);

echo "Fibonacci series with $n terms: " . implode(', ', $fibonacciSeries);
?>
