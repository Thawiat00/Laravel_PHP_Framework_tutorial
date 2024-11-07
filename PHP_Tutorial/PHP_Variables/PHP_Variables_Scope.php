<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
PHP has three different variable scopes:
<br>
local
<br>
global
<br>
static
<br>

<h1>Global and Local Scope
</h1>
<br>
A variable declared outside a function has a GLOBAL SCOPE
<br>
and can only be accessed outside a function:
<br>


<h3>in global scope</h3>
$x = 5; // global scope
<br>
function myTest() 
<br>
{
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
<br>
myTest();
<br>

<h5>echo "<p>Variable x outside function is: $x</p>";</h5>
<br>

<h3>in global scope</h3>
<br>

<h5>in method use</h5>

<?php
 // global scope
 $x = 5;

function myTest() {
    $x = 5;
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
  } 
myTest();


?>
<h5>in method use</h5>

<br>
<br>

<h3>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</h3>
Example
Variable with local scope:

<h5>Variable with local scope:</h5>
function myTest_2()
<br>

{
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
<br>

myTestmyTest_2();
<br>

// using x outside the function will generate an error
<br>
echo "<p>Variable x outside function is: $x</p>";
<br>

<h5>Variable with local scope:</h5>
<br>
<h5>in method use</h5>

<?php
function myTest_2() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest_2();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";
?>
<br>
You can have local variables with the same name in different functions,
<br>
 because local variables are only recognized by the function in which they are declared.
<br>
</body>
</html>