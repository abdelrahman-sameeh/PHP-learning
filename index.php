<?php

// Challenge 1

$index = 10;

// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1

while (1) {
  if ($index == 0) break;
  echo $index . "<br>";
  $index--;
}

echo "<br>";

?>



<?php
// Challenge 2

$index = 0;

// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20

// ----> Solution 1
while ($index <= 20) {
  if ($index == 0) {
    $index += 2;
    continue;
  }
  echo $index . "<br>";
  $index += 2;
}

echo "<br>";


// ----> Solution 2
$index = 0;

do {
  if ($index == 0) {
    $index += 2;
    continue;
  }
  echo $index . "<br>";
  $index += 2;
} while ($index <= 20);

echo "<br>";


// ----> Solution 3
for ($index = 0; $index <= 20; $index += 2) {
  if ($index == 0) {
    continue;
  }
  echo $index . "<br>";
}

echo "<br>";
?>



<?php
// Challenge 3


$num = 2;

while ($num < 520) {
  if ($num == 2) {
    $num = 1;
  } else {
    echo $num . "<br>";
    $num = $num * 2 + 2;
  }
}
// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382

echo "<br>"

?>


<?php
// Challenge 4

$start = 10;
$end = 0;
$stop = 3;

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03


for ($i = $start; $i >= $stop; $i--) {
  echo $i < $start ? "$end$i" : $i;
  echo "<br>";
}

echo "<br>"

?>



<?php
// Challenge 5

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

// Output
// 2
// 3
// 4


$i = $mix[$start];
for (; $i < count($mix); $i++) {
  if (gettype($mix[$i]) == "integer") {
    echo $mix[$i] . "<br>";
  }
}


echo "<br>"

?>



<?php
// Challenge 6


$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"

foreach ($money as $name => $price):
  echo "The Name Is $name And I Need $price From Him<br>";
endforeach;

echo "<br>";

?>



<?php

// Challenge 7

$mix = [1, 2, "A", "B", "C", 3, 4];

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"


$numeric_nums = 0;
$nonnumeric_nums = 0;

foreach ($mix as $value) {
  if (gettype($value) == "integer") {
    $numeric_nums++;
    echo $value . "<br>";
  } else {
    $nonnumeric_nums++;
  }
}

echo "$numeric_nums Numbers Printed";
echo "<br>";
echo "$nonnumeric_nums Letters Ignored";
echo "<br>";


?>


<?php

// Challenge 8


$nums = [1, 13, 12, 20, 51, 17, 30];

// Output
// 6
// 10
// 15


foreach ($nums as $num) {
  if ($num % 2 == 0)
    echo $num / 2 . "<br>";
}

echo "<br>";

?>




<?php

// Challenge 9

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

// Output
// "Sayed"
// "Osama"



// $i = $nums[$help_num] ====> num (1)
for ($i = $nums[$help_num]; $i <= $nums[$help_num] + $nums[$help_num]; $i += $nums[$help_num]) {
  echo $names[$i] . "<br>";
}


?>



<?php 

// Challenge 10

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"

foreach($nums as $num){
  $num2 = $nums[$help_num];
  $sum = $num + $num2;

  echo "$num + $num2 = $sum <br>";
  $help_num--;
}


echo "<br>";


?>




