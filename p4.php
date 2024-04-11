<?php

function displayFactors($number) {
    $factors = array();

    // Loop from 1 to the square root of the number
    for ($i = 1; $i <= sqrt($number); $i++) {
        // Check if $i is a factor
        if ($number % $i == 0) {
            $factors[] = $i;

            // If the factor is not a square root, add the corresponding divisor
            if ($i != $number / $i) {
                $factors[] = $number / $i;

            }
        }
    }

    // Sort the factors in ascending order
    sort($factors);

    return $factors;
}

// Change the value of $number to the desired number
$number = 24;
$factors = displayFactors($number);

// Displaying the factors of the number
echo "Factors of $number: ";
echo implode(", ", $factors);
?>
</br></br>
<?php

function displayDigits($number) {
    // Convert the number to a string
    $numberStr = (string) $number;

    // Split the string into an array of individual digits
    $digitsArray = str_split($numberStr);

    return $digitsArray;
}

// Change the value of $number to the desired number
$number = 12345;
$digits = displayDigits($number);

// Displaying the digits of the number
echo "Digits of $number: ";
echo implode(", ", $digits);

?>

