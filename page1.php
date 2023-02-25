<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Level 1</h1>
    <br>
<a href="page1.php"> LV 1</a>
<br>
<a href="page2.php">LV 2</a>
<br>
<a href="page3.php">LV 3</a>
<br>
<br>
<a href="index.php">Index</a>


<?php

$month = "[".date("d")."/".date("m")."/".date("y")."]";
$hour = "[".date("H").":".date("i").":".date("s")."]";
$url = $_SERVER['REMOTE_ADDR']." connect to " .$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$reunion = $month.$hour.$url."\n";
echo $reunion;

$files = fopen("logs.txt", "a+");
fputs($files,$reunion);
fclose($files);

?>

</body>
</html>