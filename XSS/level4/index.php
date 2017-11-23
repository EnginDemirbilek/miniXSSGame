<html>
<body>

<?php
include 'log.php';?>

<p><strong><font color="red" size:2>LEVEL 4</font></strong></p>
<form action="<?php ($_SERVER["PHP_SELF"]);?>" method="GET"><br>
Search User: <input type="text" name="name">
<input type="submit" value="ara">
</form>

<button onclick="location='/XSS/level5/'">Next Level</button><br>

<?php

if($_SERVER["REQUEST_METHOD"]=="GET")
{
if($_GET["name"]!=NULL){
$_GET["name"] = control($_GET["name"]);

}

if ($_GET["name"]=="HACKER")
{
$_GET["name"]="HACKER";

}

if($_GET["name"]!=NULL)
{
echo "<br>";
echo "<br>";
echo "User Found: ";
echo $_GET["name"];
}
}


function control($data)
{

if (preg_match("/(script|img|body)/i",$data))
{
echo "<br>";
echo '<i style="color:red;font-size:15px;">
      SALDIRI TESPİT EDİLDİ / ÖNLENDİ </i> ';

$data = "HACKER";
return $data;
}
else{
return $data;}

}

?>


</body>
</html>
