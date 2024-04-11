<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <p>Enter the number of lines:</p>
    <form method="post">
        <input type="text" name="lines">
        <button type="submit">Generate Pattern</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lines = $_POST["lines"];
        for ($i = 1; $i <= $lines; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>

