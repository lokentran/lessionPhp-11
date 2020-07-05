<?php

function findMax($arr) {
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
       if ($arr[$i] > $max) {
          $max = $arr[$i];
       }
    }
    return $max;
}

 function findMin($arr) {
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
       if ($arr[$i] < $min) {
          $min = $arr[$i];
       }
    }
    return $min;
}

$arr = [];
for($i = 0; $i < 100; $i++) {
   $arr[$i] = rand(1,101);
}
foreach($arr as $num) {
   echo $num . " ";
}

$minValue = findMin($arr);
echo "The minimum value is: " . $minValue;

$maxValue = findMax($arr);
echo "The maximum value is: " . $maxValue;
 


