<!DOCTYPE html>
<html>
<body>
    <form method= "post" action="">
        <label for= "inputstring">Enter a string:</label><br>
        <input type="text" name="inputString" id="inputstring" required><br>
        <label for= "color">Select Color:</label>
        <select name="color" id="color" required>
            <option value= "black">Black</option>
            <option value= "pink">Pink</option>
            <option value= "red">Red</option>
            <option value= "yellow">Yellow</option>
        </select><br>
        <input type="submit"></input>
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $input=$_POST["inputString"];
        $color=$_POST["color"];
        echo "<p style='color:$color;'>$input</p>"; 
    }
    echo "<p style='color:red;'>red</p>"
    ?>
</body>
</html>
