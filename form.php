<!  DOCTYPE html_entity_decode
<html>
<head>
    <title>Example Form</title>
</head>
<body>
    <h1>Example Form</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"
        required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"
        required><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>
        <input type="submit" value="submit">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //Retrieve form data
    $name= $_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    //Display the submitted data
    echo "Name:".$name."<br>";
    echo "Email:".$email."<br>";
    echo "Message:".$message."<br>";
}
?>
<?php
echo "Your IP Address Is: ".$_SERVER['REMOTE_ADDR'].
"<br>";
echo"Browser Detection/Information:".$_SERVER
['HTTP_USER_AGENT']. "<br>";
echo "You came from a page called:".$_SERVER
['HTTP_REFERER']. "<br>";
?>
<!-- write a php script for the following: design a form to accept 2 strings from the user. Find the first 
occurence small string in the large string. Provide a text box to accept a string,
 which will replace the small string in the large string.
 -->
 <!DOCTYPE html>
<html>
<head>
    <title>String Replacement Form</title>
</head>
<body>
    <h2>String Replacement Form</h2>
    <form method="post" action="">
        <label for="large_string">Enter Large String:</label><br>
        <input type="text" id="large_string" name="large_string"><br><br>

        <label for="small_string">Enter Small String:</label><br>
        <input type="text" id="small_string" name="small_string"><br><br>

        <label for="replacement_string">Enter Replacement String:</label><br>
        <input type="text" id="replacement_string" name="replacement_string"><br><br>

        <input type="submit" value="Replace">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $largeString = $_POST['large_string'];
        $smallString = $_POST['small_string'];
        $replacementString = $_POST['replacement_string'];

        // Find the position of the first occurrence of the small string
        $position = strpos($largeString, $smallString);

        // If the small string is found, replace it with the replacement string
        if ($position !== false) {
            $newString = substr_replace($largeString, $replacementString, $position, strlen($smallString));
            echo "<p>Resulting String: $newString</p>";
        } else {
            echo "<p>Small string not found in the large string.</p>";
        }
    }
    ?>
</body>
</html>
  


