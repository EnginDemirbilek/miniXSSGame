<html>
<body>
<style>
.error {color: #FF0000;}
</style>

<?php
include 'log.php';?>

<p><strong><font color="red" size:2>LEVEL 5</font></strong></p>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="GET">
Kullanıcı Ara: <input type="Text" name="name">
<input type="Submit" value="ara">

<?php


if($_SERVER["REQUEST_METHOD"]=="GET")
{
$name = securer($_GET["name"]);
if ($_GET["name"]!=NULL){
echo "<br>";
echo "<br>";
echo "Kullanıcı Bulundu: ";
echo $name;}
}


function securer($data)
{
$data = htmlspecialchars($data);
$data = stripslashes($data);
$data = trim($data);

return $data;
}


?>

</form>

</body>
</html>
