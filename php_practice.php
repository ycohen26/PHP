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
echo "<br />";

// Variable Data Types
$whatsit="George";
echo "Value is ".gettype($whatsit). ".<br/>\n";
$whatsit=8.9;
echo "Value is ".gettype($whatsit). ".<br/>\n";
$whatsit=True;
echo "Value is ".gettype($whatsit). ".<br/>\n";
$whatsit=2;
echo "Value is ".gettype($whatsit). ".<br/>\n";
$whatsit=NULL;
echo "Value is ".gettype($whatsit). ".<br/>\n";
echo "<br />";
echo "<br />";

// Control Structures Ex. #1: If-Else Statement
if (date('F', time()) == "August") {
  echo "It's August, so it's really hot.";
} else {
  echo "Not August, so at least not in the peak of the heat.";
}
echo "<br />";
echo "<br />";

// Simple Loops
$i=1;

while ($i <= 9) {
  echo "abc ";
  $i++;
}
echo "<br />";
echo "<br />";

$i=1;

do {
  echo "xyz ";
  $i++;
} while ($i<=9);
echo "<br />";
echo "<br />";

for ($i=1; $i<=9; $i++) {
  echo "$i ";
}
echo "<br />";
echo "<br />";

for ($i='A'; $i<='F'; $i++) {
  echo "Item $i <br/>";
}
echo "<br />";
echo "<br />";
?>

</body>
</html>