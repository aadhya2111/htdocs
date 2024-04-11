<?php
echo "Hello World";
echo "<h3>Example for __LINE__</h3>";
echo "You are at line number " . __LINE__ . "<br><br>";
echo "<h3>Example for __FUNCTION__</h3>";
function myMessage()
{
    echo 'The function name is ' . __FUNCTION__;
}
myMessage();
class JTP
{
    public function __construct()
    {
        ;
    }
    public function getClassName()
    {
        echo __CLASS__ . "<br><br>";
    }
}
$t = new JTP();
$t->getClassName();
echo "<h3>Example for __NAMESPACE__ </h3>";
class name
{
    public function __construct()
    {
        echo 'This line will print on calling namespace.';
    }
}
$bikes = array("royal enfield", "yamaha", "ktm");
var_dump($bikes);
echo "<br>";
echo "array element1: $bikes[0]<br>";
echo "array element2: $bikes[1]<br>";
echo "array element3: $bikes[2]<br>";
$num = 12;
if ($num < 100) {
    echo "$num is less than 100<br>";
}
$marks = 69;
if ($marks < 40) {
    echo "fail";
} else if ($marks >= 40 && $marks < 50) {
    echo "D grade";
} else if ($marks >= 50 && $marks < 65) {
    echo "C grade";
} else if ($marks >= 65 && $marks < 80) {
    echo "B grade";
} else if ($marks >= 80 && $marks < 90) {
    echo "A grade";
} else if ($marks >= 90 && $marks < 100) {
    echo "A+ grade";
} else {
    echo "invalid input";
}
$num = 20;
switch ($num) {
    case 10:
        echo "number is equal to 10";
        break;
    case 20:
        echo "number is equal to 20";
        break;
    case 30:
        echo "number is equal to 30";
        break;
    default:
        echo "number is not equal to 10, 20 or 30";
}
$num = 20;
switch ($num) {
    case 10:
        echo "number is equals to 10";
        break;
    case 20:
        echo "number is equals to 20";
        break;
    case 30:
        echo "number is equals to 30";
        break;
    default:
        echo "number is not equal to 10, 20 or 30";
}
$number = 1233456;
if ($number % 2 == 0) {
    echo "$number is Even Number";
} else {
    echo "$number is Odd Number";
}
for ($n = 1; $n <= 10; $n++) {
    echo "$n<br/>";
}
//write a program to calculate factorial of a number using for loop
?>