<?php
// Challenge 1

$a = 100;
$b = 200;
$c = 100;

/*
Check That:
Variable "b" Larger Than Variable "a"
Variable "a" Identical To Variable "c"
Variable "a" Plus Variable "c" Identical To Variable "b"
*/

echo ($b > $a and $a == $c and $a + $c == $b) ? "Yes" : "No";

if ($b > $a and $a == $c and $a + $c == $b):
  echo "Yes";
endif;

?>


<?php
// Challenge 2

echo "<br>";

// Test Case 1
$a = 100;
$b = 200;
$c = 300;

// A Is Not Larger Than B Or C

if ($b > $a && $c > $a) {
  echo "A Is Not Larger Than B Or C";
}

echo "<br>";

// Test Case 2
$a = 200;
$b = 100;
$c = 300;

// A Is Larger Than B

if ($a > $b) {
  echo "A Is Larger Than B";
}

echo "<br>";

// Test Case 3
$a = 200;
$b = 200;
$c = 100;

// A Is Larger Than c



if ($a > $c) {
  echo "A Is Larger Than C";
}

echo "<br>";

?>


<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>


<?php
// Challenge 3

$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "The Request Method Is Post And Username Is " . $_POST['user'];
  echo "<br>";
  if (in_array($_POST["user"], $admins)) {
    echo "This Username " . $_POST["user"] . " Is Admin";
  }
}

echo "<br>";

?>


<?php
// Challenge 4

$a = 30;
$b = 20;
$c = 10;

echo ($a + $b === $c)
  ? "A + B = C"
  : (($a + $c === $b)
    ? "A + C = B"
    : (($b + $c === $a)
      ? "B + C = A"
      : "The End"));


echo "<br>";

if ($a + $b === $c) {

  echo "A + B = C";
} elseif ($a + $c === $b) {

  echo "A + C = B";
} elseif ($b + $c === $a) {

  echo "B + C = A";
} else {

  echo "The End";
}

// Output
// "B + C = A"

echo "<br>";

?>


<?php
// Challenge 5


$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}

echo "<br>";

// >>>>>>> To Be

if ($age > 18 and gettype($name) === "string" and $country === "Egypt"):
  echo "The Age Is Good To Go<br>";
  echo "The Name Is Good To Go<br>";
  echo "The Country Is Good To Go<br>";
endif;


echo "<br>";


?>




<?php

// Challenge 6


$genre = "Hack And Slash";

if ($genre === "RPG") {

  echo "I Recommend Ys Games";
} elseif ($genre === "Hack And Slash") {

  echo "I Recommend Castlevania Games";
} elseif ($genre === "FPS") {

  echo "I Recommend Uncharted Games";
} elseif ($genre === "Platform") {

  echo "I Recommend Megaman Games";
} elseif ($genre === "Puzzle") {

  echo "I Recommend Megaman Games";
} else {

  echo "I Recommend Shadow Of Mordor And Shadow Of War";
}

// Use Switch
echo "<br>";



switch ($genre):
  case "RPG":
    echo "I Recommend Ys Games";
    break;
  case "Hack And Slash":
    echo "I Recommend Castlevania Games";
    break;
  case "FPS":
    echo "I Recommend Uncharted Games";
    break;
  case "Platform":
    echo "I Recommend Megaman Games";
    break;
  case "Puzzle":
    echo "I Recommend Megaman Games";
    break;
  default:
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
endswitch;


echo "<br>";
?>


<?php
// Challenge 7

$num_one = 23;
$num_two = 5;
$op = "+";


switch ($op) {
  case "+":
    echo $num_one + $num_two;
    break;
  case "-":
    echo $num_one - $num_two;
    break;
  case "/":
    echo $num_one / $num_two;
    break;
  case "*":
    echo $num_one * $num_two;
    break;
  default:
    echo "Unknown Operation";
}

echo "<br>";

?>

<?php


$day = "Sat";

switch ($day) {
  case "Sat":
  case "Sun":
  case "Mon":
    echo "We Are Open All The Day";
    break;
  case "Tue":
  case "Wed":
    echo "We Are Open From 08:12";
    break;
  case "Thu":
  case "Fri":
    echo "We Are Closed";
    break;
  default:
    echo "Unknown Day";
}

echo "<br>";

if($day=="Sat" || $day=="Sun" || $day=="Mon"){
  echo "We Are Open All The Day";
}elseif($day=="Tue" || $day=="Wed"){
  echo "We Are Open From 08:12";
}elseif($day=="Thu" || $day=="Fri"){
  echo "We Are Closed";
}else{
  echo "Unknown Day";
}




?>





