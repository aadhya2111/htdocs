<?php
session_start();
$_SESSION["Name"]="Sachin";
$_SESSION["Rollnumber"]="102";
echo $_SESSION["Name"];
echo $_SESSION["Rollnumber"];
if (isset($_SESSION["Name"]))
{
    unset($_SESSION["Rollnumber"]);
}
echo $_SESSION["Rollnumber"];
echo $_SESSION["Name"];
session_destroy();
echo $_SESSION["Rollnumber"];
?>


