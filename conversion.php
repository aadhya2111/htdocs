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
<html>
    <body>
        <form action='htmlfprm.php' method='post'>
            <pre> <h3>Operations</h3>
            Number <input type='text' name='number'><br>
            1<input type='radio' name='a' value='1'>Binary<br>
            2<input type='radio' name='a' value='2'>Octal<br> 
            3<input type='radio' name='a' value='3'>Hexadecimal<br> 
            <input type='submit' value='ok'><input type='reset' value='cancel'><br> 
            </pre>
        </form>
    </body>
</html>
<?php
$number=$_POST['number'];
$ch=$_POST['a'];
switch($ch)
{
    case 1: 
        $num1=decbin($number);
        echo $num1;
    break;
    case 2:
        $num2=decoct($number);
        echo $num2;
    break;
    case 3:
        $num3=dechex($number);
        echo $num3;
    break;
    default:
    echo "Enter the right choice";
}
?>