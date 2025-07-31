<?php

$batch = 111; // interger data type
$name = "IMC"; //string data type
$temp = 33.5; // float data type
echo "<b><em>mingalar pr bya. Batch $batch ka br</em></b>";

function power($num1, $num2): float|int|object
{
    return pow(num: $num1, exponent: $num2);
}

$number1 = 2;
$number2 = 6;
$result = power(num1: $number1, num2: $number2);
echo "<br>result is $result";
?> 