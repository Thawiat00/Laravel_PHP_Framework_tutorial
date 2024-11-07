<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Variable Types</h1>
$x = 5;      // $x is an integer
<br>
$y = "John"; // $y is a string
<br>
<br>
echo $x;
<br>
<?php
$x = 5;
echo $x;
echo"<br>";
?>

<br>
echo $y;
<br>
<?php
$y = "John";
echo $y;
echo"<br>";
?>
<br>


<h1>Get the Type</h1>
$x = 5;
<br>
var_dump($x);
<?php
$x = 5;
echo"<br>";
var_dump($x);
echo"<br>";
echo"<br>";
?>

var_dump(5);
<br>
<?php
var_dump(5);
echo "<br>";
?>

<br>
var_dump("John");
<br>
<?php
var_dump("John");
?>
<br>
<br>

var_dump(3.14);
<br>
<?php
var_dump(3.14);
?>
<br>
<br>


var_dump(true);
<br>
<?php
var_dump(true);
?>
<br>
<br>



var_dump([2, 3, 56]);
<br>
<?php
var_dump([2, 3, 56]);
?>
<br>
<br>


var_dump(NULL);
<br>
<?php
var_dump(NULL);
?>
<br>
<br>


<h1>Assign String to a Variable</h1>
Assigning a string to a variable is done with the variable name followed
<br>
by an equal sign and the string:
<br>
$x = "John";
<br>
echo $x;
<br>
<?php
$x = "John";
echo $x;
?>
<br>
<br>

<h1>Assign Multiple Values</h1>
<br>
You can assign the same value to multiple variables in one line:
<br>
Example
<br>
All three variables get the value "Fruit":
<br>
$x = $y = $z = "Fruit";
<br>
<?php
$x = $y = $z = "Fruit";
echo "x : ".$x;
echo "<br>";

echo "y : ".$y;
echo "<br>";

echo "z : ".$z;
echo "<br>";
?>
<br>

</body>
</html>