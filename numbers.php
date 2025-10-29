<?php

$int=5;
$kasr = 16.5;
$string_number = "14";

// integer
var_dump(is_int($int));
var_dump(is_int($kasr));
var_dump(is_int($string_number));
//Float
var_dump(is_float($int));
var_dump(is_float($kasr));
var_dump(is_float($string_number));
//Number
var_dump(is_numeric($int));
var_dump(is_numeric($kasr));
var_dump(is_numeric($string_number));
//string
var_dump(is_string(34));
/*************************************************/
$a = 5;
$b = 5.34;   //float
$c = "hello";  //string
$d = true;   //boolean

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$a = ($a);
$b = ($b);
$c = ($c);
$d = ($d);
// To verify the type of any object in PHP, use the var_dump() funtion:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
echo pi();
echo "\n";
echo min(5,46,2,8,45,-6,-45,12,0);
echo "\n";
echo max(5,45,65,73,23,111,33,45,);
echo "\n";
echo abs(-7);
echo"\n";
echo sqrt(56);


echo "\n";
echo (round(0.60));
echo "\n";
echo (round(0.70));
echo "\n";
echo(rand(0.56, 456456.));
echo "\n";




?>