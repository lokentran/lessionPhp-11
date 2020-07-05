<?php

function isSearchLinear($arr, $value) {
    $length = count($arr);
    for ($i=0; $i < $length ; $i++) { 
        if($arr[$i] == $value ) {
            return true;
        }
    }
    return false;
}
 
 if(isSearchLinear([1,2,3,4,5,2],1)) {
     echo "Mảng có chứa giá trị cần tim";
 } else {
     echo "Mảng không chứa giá trị cần tìm.";
 }