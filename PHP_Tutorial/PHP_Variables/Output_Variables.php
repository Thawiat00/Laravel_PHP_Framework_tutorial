<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
The PHP echo statement is often used to output data to the screen.
<br>
The following example will show how to output text and a variable:
<br>
<br>

$txt = "W3Schools.com";
<br>
echo "I love $txt!";

<?php
$txt = "W3Schools.com";
echo "<br>";
echo "I love $txt!";
echo "<br>";
?>
<br>

The following example will produce the same output as the example above:
$txt = "W3Schools.com";
<br>
echo "I love " . $txt . "!";

<?php
$txt = "W3Schools.com";
echo "<br>";
echo "I love " . $txt . "!";
echo "<br>";
?>
<br>

The following example will output the sum of two variables:
<br>
$x = 5;
<br>
$y = 4;
<br>
echo $x + $y;
<br>
<?php
$x = 5;
$y = 4;
echo "echo $ x + $ y = ".$x + $y." ";
echo "<br>";
?>





</body>
</html>