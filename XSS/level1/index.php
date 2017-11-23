<?php
session_start();
?>

<html>
<body>
<?php
include 'log.php';?>
<p><strong><font color="red" size:2>LEVEL 1</font></strong></p>
<form action="<?php ($_SERVER["PHP_SELF"]);?>" method="GET"><br>
Search User: <input type="text" name="name">
<input type="submit" value="find"> 
</form>
<button onclick="location='/XSS/level2/'">Next Level</button> 





<?php


if($_SERVER["REQUEST_METHOD"]=="GET")
{
$name = $_GET["name"];

if ($name != NULL){
echo "<br>" . "<br>";
echo "User found:   ";
echo ($_GET["name"]);
echo "<br>";

}

}
?>

<?php include 'footer.php'; ?>


</body>
</html> 
