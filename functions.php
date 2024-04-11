<?php
function sayHello($name){
    echo"Hello $name<br/>";
}
sayHello("Sonno");
sayHello("Vimal");
sayHello("John");
?>
<form action="functions.php" method="get">
Name:<input type="text"name="name"/>
<input type="submit" value="visit"/>
</form>
<?php
$name=$_GET["name"];
echo "Welcome,$name";
?>
<br>
<?php
print "current date in dd/mm/yy format:".date("d/m/y");
print"</br>";
print "current date in dd/mm/yyyy format:".date("d/m/Y");
print"</br>";
print "current date in dd MON yyyy format:".date("D,d M Y");
print"</br>";
print "current date in dd MON yyyy format:".date("D,d F Y");
print"</br>";
print "current time in HH:MM:SS am/pm format:".date("h:i:s:a");
print"</br>";
print "current time in HH:MM:SS AM/PM format:".date("h:i:s:A");
print"</br>";
?>
<?php
$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");
echo "Sonoo salary:".$salary["Sonoo"]."<br/>";
echo "Kartik salary:".$salary["Kartik"]."<br/>";
echo "John salary:".$salary["John"]."<br/>";
$season=array("x","u","i","a");
sort($season);
foreach($season as $s);
{
    echo$s;
}
$array("a","b","c","d");
var_dump($array1);
unset($array[1]);
var_dump($array1);
?>
<html>
    <body>
        <form action='ass2a1.php' method='post'>
            <pre> <h3>OPERATIONS</h3>
            1 <input type='radio' name='a' value='1'>Display.<br>
            2 <input type='radio' name='a' value='2'>size.<br>
            3 <input type='radio' name='a' value='3'>delete.<br>
            4 <input type='radio' name='a' value='4'>reverse.<br>
            5 <input type='radio' name='a' value='5'>transverse.<br>
</pre>
