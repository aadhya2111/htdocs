<?php
session_start();
?>
<html>
<body>
<?php 
$_SESSION["User"]="aadhya";
echo "Session information are set successfully.";
?>
<a href="p1.php">Visit next page</a>
</body>
<html>