<?php

function even_or_odd(int $n): string
{
  return $n % 2 == 0 ? "Even" : "Odd";
}


echo even_or_odd(50) . "<br>";
echo even_or_odd(51) . "<br>";


function getCount(string $str): int
{
  $vowels = ["a", "e", "i", "o", "u"];
  $result = 0;
  foreach (str_split(strtolower($str)) as $char) {
    if (in_array($char, $vowels)) {
      $result++;
    }
  }
  return $result;
}

echo getCount("ahMEDMohamed") . "<br>";




function validateBase(string $num, int $base): bool
{
  $dict = [
    0 => 0,
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    "A" => 10,
    "B" => 11,
    "C" => 12,
    "D" => 13,
    "E" => 14,
    "F" => 15,
    "G" => 16,
    "H" => 17,
    "I" => 18,
    "J" => 19,
    "K" => 20,
    "L" => 21,
    "M" => 22,
    "N" => 23,
    "O" => 24,
    "P" => 25,
    "Q" => 26,
    "R" => 27,
    "S" => 28,
    "T" => 29,
    "U" => 30,
    "V" => 31,
    "W" => 32,
    "X" => 33,
    "Y" => 34,
    "Z" => 35
  ];

  $num = str_split($num);
  $num = array_map(fn($c) => $dict[$c], $num);
  rsort($num);

  return $base > $num[0];
}


var_dump(validateBase("565D", 13));
var_dump(validateBase("565C", 13));




?>