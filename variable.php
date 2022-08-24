<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Variable Type </title>
</head>
<body>
    
<?php

// String

$str = "AUBDUR ROB ANIK";
$str1 = "aubdur rob anik";
$str2 = "anik";

echo $str." ".$str1;
echo "<br>";

echo strtolower($str);
echo "<br>";

echo strtoupper($str1);
echo "<br>";

echo ucfirst($str2);
echo "<br>";

$str3 = "Ar 'Anik'";

echo $str3;
echo "<br>";

$str4 = 'Ar "Anik"';

echo $str4;
echo "<br>";

$str5 = 'Ar \'Anik\'';

echo $str5;
echo "<br>";

// Interger
$a = 20;

var_dump($a);
echo "<br>";

// float
$b = 10.20;

var_dump($b);
echo "<br>";

// Boolean
$c = true;

var_dump($c);
echo "<br>";

?>

</body>
</html>