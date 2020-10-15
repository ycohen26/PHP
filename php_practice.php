<!DOCTYPE html>
<html>
<body>

<?php
// Show text in browser
echo "Twinkle, Twinkle little star.<br>";

// Create and use variables
$twkl = "Twinkle";
$str = "star";
echo "$twkl, $twkl little $str.<br>";

$twkl = "Tinkle";
$str = "pisher";
echo "$twkl, $twkl little $str.<br>";
echo "<br>";

// Arithmetic Operators and Variables
$x=10;
$y=7;

$result=$x+$y; 
echo "$x + $y = $result<br>";

$result=$x - $y;
echo "$x - $y = $result<br>";

$result=$x * $y;
echo "$x * $y = $result<br>";

$result=$x / $y;
echo "$x / $y = $result<br>";

$result=$x % $y;
echo "$x % $y = $result<br>";
echo "<br>";

// Arithmetic-Assignment Operators and Variables
$variable=8;
echo "Value is now $variable.<br />";
$variable += 2;
echo "Add 2.  Value is now $variable.<br />";
$variable -= 4;
echo "Subtract 4. Value is now $variable.<br />";
$variable *= 5;
echo "Multiply by 5. Value is now $variable.<br />";
$variable /= 3;
echo "Divide by 3. Value is now $variable.<br />";
$variable += 1;
echo "Increment value by one. Value is now $variable.<br />";
$variable -= 1;
echo "Decrement value by one. Value is now $variable.<br />";
echo "<br />";

// Variable Content and Destruction
$name="Harry";
$age=28;

var_dump($name);
echo "<br />";

print_r ($name);
echo "<br />";

var_dump($age);
echo "<br />";

$name=NULL;
var_dump($name);
echo "<br />";
echo "<br />";

// Concatenation of Strings
$around="around";
echo 'What goes ' . $around . ' comes '. $around .'.';
echo "<br />";

// Variable Data Types

?>

</body>
</html>