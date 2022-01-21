<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



"EX1 </br></br>";

$a = 1;
echo $a == 0 ? "верно" : "неверно";

$a = 3;
echo  $a == 0 ? "верно" : "неверно";

$a = -3;
echo $a == 0 ? "верно" : "неверно";

$a = 0;
echo $a == 0 ? "верно" : "неверно";

$a = true;
echo $a == 0 ? "верно" : "неверно";

$a = null;
echo $a == 0 ?   "верно" : "неверно";

$a = '0';
echo $a == 0 ? "верно" : "неверно";
echo "</br>";

echo "</br><hr><?br>";

"EX2";
$digit = 144;
$digit .= '';
$digit[1] = 0;
echo $digit;

echo "</br><hr><?br>";

"EX3";
$a = 1;
$b = 3;
echo $a <= 1 && $b >= 3 ? $a + $b : $a - $b;

$a = 0;
$b = 6;
echo $a <= 1 && $b >= 3 ? $a + $b : $a - $b;

$a = 3;
$b = 5;
echo $a <= 1 && $b >= 3 ? $a + $b : $a - $b;

echo "</br><hr><?br>";

"EX4";

$string = 'abcde';
echo $string[0] == 'a' ? "да" : "нет";

"EX5";

echo "</br><hr><?br>";

$str    = "123456";
$first3 = $str[0] + $str[1] + $str[2];
$last3  = $str[3] + $str[4] + $str[5];

echo $first3 == $last3  ? "да" : "нет </br>";

"EX7";

echo "</br><hr><?br>";

$sum = 0;
for ($i = 20; $i <= 45; $i++) {

    if ($i % 5) continue;
    $sum += $i;
}
echo  $sum;

"EX8";

echo "</br><hr><?br>";

function RemoveEvenNumbers(int $num)
{
    $new_num = str_split($num);
    foreach ($new_num as $key => $value) {
        if ($value % 2 == 0) {
            $new_num[$key] = 0;
        }
    }
    return (int)(implode($new_num));
}
echo  RemoveEvenNumbers(123456789);

"EX9";

echo "</br><hr><?br>";

$num = 1000;
$count = 1;

while (true) {

    echo ('number is ' . $num . "<br>");
    $num /= 2;
    if ($num < 50) {
        break;
    }
    $count++;
}
echo ($num . ' is less than 50' . "<br>");
echo ('Total iterations is ' . $count . "<br>");


for ($num = 1000, $i = 0; $num >= 50; $num / 2, $i++) {
    $num /= 2;
    echo ('number is ' . $num . "<br>");
}
echo ($num . ' is less than 50' . "<br>");
echo ('Total iterations is ' . $i . "<br>");


echo "</br><hr><?br>";

"EX10";


for ($i=1; $i<=7; $i++)	{
  for($j = 1; $j <= 14; $j++){
    echo "*";
  }
  echo "</br>";
}
