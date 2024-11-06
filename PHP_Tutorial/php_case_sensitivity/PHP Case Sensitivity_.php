//In PHP, keywords (e.g. if, else, while, echo, etc.), classes
</br>
//functions, and user-defined functions are not case-sensitive.
</br>
//In the example below, all three echo statements below are equal and legal:

</br>
//ECHO is the same as echo:
<br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
ECHO "Hello world! <br>";
echo "Hello world!<br>";
EcHo "Hello world! <br>";
?>

<?php
echo "</br>";

echo "Look at the example below";
echo "</br>";
echo "only the first statement will display the value of the $ color variable! ";
echo "</br>";
echo "This is because $ color, $ COLOR, and $ coLOR are treated as three different variables:";
echo "</br>";
?>

<?php

$color ="red";

$COLOR ="new $ COLOR not same $ color";

$coLOR ="new $ coLOR not same $ color";

echo "</br>";
echo "$ COLOR is not same as $ color:";
echo "</br>";


echo "my car is: " .$color . "</br>";
echo "my house is: " .$COLOR . "</br>";
echo "my car is: " .$coLOR . "</br>";


?>

</body>
</html>