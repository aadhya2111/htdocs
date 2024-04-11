<?php
echo "Hello World";
echo 5+98;
?>
<br>
<?php

function isPalindrome($number) {
    // Convert the number to a string
    $str = (string)$number;
    
    // Reverse the string
    $reversedStr = strrev($str);
    
    // Check if the original and reversed strings are equal
    return $str === $reversedStr;
}

// Example usage:
$inputNumber = 121;
if (isPalindrome($inputNumber)) {
    echo "$inputNumber is a palindrome.";
} else {
    echo "$inputNumber is not a palindrome.";
}

?>
<!-- //write a program to check whether given 3 digit number is a armstrong number or not -->
<br>
<?php

function isArmstrongNumber($number) {
    // Convert the number to a string to get each digit
    $str = (string)$number;
    
    // Get the number of digits
    $numDigits = strlen($str);
    
    // Initialize sum to 0
    $sum = 0;
    
    // Calculate the sum of each digit raised to the power of the number of digits
    for ($i = 0; $i < $numDigits; $i++) {
        $digit = (int)$str[$i];
        $sum += pow($digit, $numDigits);
    }
    
    // Check if the sum is equal to the original number
    return $sum === $number;
}

// Example usage:
$inputNumber = 153; // Change this to any 3-digit number you want to check
if (isArmstrongNumber($inputNumber)) {
    echo "$inputNumber is an Armstrong number.";
} else {
    echo "$inputNumber is not an Armstrong number.";
}

?>
<!-- write a program to check whether given number is prime or not -->
<br>
<?php

function isPrime($number) {
    // 0 and 1 are not prime numbers
    if ($number < 2) {
        return false;
    }
    
    // Check for factors up to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false; // If divisible, it's not a prime number
        }
    }
    
    return true; // If no factors found, it's a prime number
}

// Example usage:
$inputNumber = 17; // Change this to any number you want to check
if (isPrime($inputNumber)) {
    echo "$inputNumber is a prime number.";
} else {
    echo "$inputNumber is not a prime number.";
}

?>
<!-- write a program to calculate x^y -->
<br>
<?php
function calculatePower($x, $y) {
    $result = pow($x, $y);
    return $result;
}

// Example usage:
$base = 2; // Change this to the base value
$exponent = 3; // Change this to the exponent value
$result = calculatePower($base, $exponent);

echo "$base ^ $exponent = $result";

?>
<?php
$i=3;
$a=2;
while($i<$a)
{
    echo "hello";
}
?>
<br>
<?php
// outer loop
for ($i=1;$i<3;$i++){
    // inner loop
    for($j=1;$j<=3;$j++){
        if(!($i==$j)){
            continue;
        }
        echo $i,$j;
        
    }
}
?>
<br>
<?php
for($i=1;$i<=4;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "1";
    }
    echo "<br>";
}
?>
<br>
<!-- write a program in php to calculate 1!+2!.......n! -->
<?php

function calculateFactorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}

function calculateSumOfFactorials($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $sum += calculateFactorial($i);
    }

    return $sum;
}

// Example usage:
$n = 5; // Change this to the desired value of n
$result = calculateSumOfFactorials($n);

echo "The sum of factorials from 1 to $n is: $result";
?>
<br>
<?php
function sayHello(){
    echo"Hello PHP Function";
}
sayHello();//calling function
?>
<br>



