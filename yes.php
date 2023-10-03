<!DOCTYPE html>
<html>
<head>
    <title>PHP Project</title>
<head>
<body>
<?php
//integers
$int_var = 12345;
$another_int = -12345 + 12345;
//doubles
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;
print($many + $many_2 = $few);
//boolean
if (TRUE)
print("This will always print<br>");
else
print("This will never print<br>");
//strings
$string_1 = "This is a string in double quotes";
$string_2 = "This is a somewhat longer, singly quoted string";
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters
$variable = "name";
$literally = 'My $variable will not print!\\n';
print($literally);
$literally = "My $variable will print!\\n";
print($literally);

//PHP Local Variables
$x = 4;
function assignx () {
$x = 0;
print "\$x inside function is $x.
";
}
assignx();
print "\$x outside of function is $x.
";

//PHP Function Parameters
// multiply a value by 10 and return it to the caller
function multiply ($value) {
$value = $value * 10;
return $value;
}
$retval = multiply (10);
Print "Return value is $retval\n";

//PHP Global Variables
$somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();

//PHP Static Variables
function keep_track() {
STATIC $count = 0;
$count++;
print $count;
print "";
}
keep_track();
keep_track();
keep_track();

//PHP Constants
define("MINSIZE", 50);
echo MINSIZE;
echo constant("MINSIZE"); // same thing as the previous line
// Valid constant names
define("ONE", "first thing");
define("TWO2", "second thing");
define("THREE_3", "third thing");
// Invalid constant names
//define("2TWO", "second thing");
//define("__THREE__", "third value");

//PHP Operator Types
$a = 42;
$b = 20;

$c = $a + $b;
echo "Addition Operation Result: $c <br/>";
$c = $a - $b;
echo "Subtraction Operation Result: $c <br/>";
$c = $a * $b;
echo "Multiplication Operation Result: $c <br/>";
$c = $a / $b;
echo "Division Operation Result: $c <br/>";
$c = $a % $b;
echo "Modulus Operation Result: $c <br/>";
$c = $a++;
echo "Increment Operation Result: $c <br/>";
$c = $a--;
echo "Decrement Operation Result: $c <br/>";
?>
</body>
</html>