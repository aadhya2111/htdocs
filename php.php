<?php

function generateFibonacci($n)
{
    $fibonacciSeries = array();

    if ($n >= 1) {
        $fibonacciSeries[] = 0;
    }
    if ($n >= 2) {
        $fibonacciSeries[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }

    return $fibonacciSeries;
}

// Change the value of $n to control the number of terms in the Fibonacci series
$n = 10;
$fibonacciSeries = generateFibonacci($n);

// Displaying the generated Fibonacci series
echo "Fibonacci Series (first $n terms): ";
echo implode(", ", $fibonacciSeries);

?>