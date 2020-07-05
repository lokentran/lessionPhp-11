<?php

function isSearchBinary($arr, $value) {
    $start = 0;
    $end = count($arr) -1;
    asort($arr);

    while($start <= $end ) {
        $mid = (int) (($start + $end) / 2); 
        
        echo $arr[$mid] . "<br>";

        if($arr[$mid] > $value) {
            $end = $mid - 1;
        } else if ($arr[$mid] < $value) {
            $start = $mid + 1;
        } else {
            return true;
        }
     }
     return false;
}

if(isSearchBinary([1,3,5,8,10,12,45,123,4234], 1000)) {
    echo "Mang chua phan tu can tim kiem";
} else {
    echo "Mang khong chua phan tu can tim kiem";
}

