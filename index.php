<?php
$mix = ["A", "C", "B", 1, 100, 3.1, 2, 6, 5, 7];

$mix = array_filter( $mix, fn($item) => is_numeric($item) && $item % 2 !== 0);

echo "<pre>";
print_r($mix);
echo "</pre>";

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )

?>


<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];

// Output
// Every Time The Array Elements Will Be Shuffled

function custom_shuffle($array){
  $arr_length = count($array);
  for($i=0; $i<=(int)$arr_length/2; $i++)
  {
    $index = rand($i+1, $arr_length - 1);
    [$array[$i], $array[$index]] =[$array[$index], $array[$i]]; 
  }
  
  return $array;
}

echo "<pre>";
print_r($nums);
print_r(custom_shuffle($nums));
echo "</pre>";


?>

<?php 

$title = "E&z\$r0 W\$b Sch00&";

echo str_replace(["&", "$", "0"],["l", "e", "o"], $title, $count) . "<br>";
echo $count;

// Output
// "Elzero Web School"
// 7




?>


