<?php

function countNumber($numbers , $value) {
    $count = 0;

    for ($i=0; $i < count($numbers) ; $i++) { 
        if($numbers[$i] == $value ) {
            $count++;
        }
    }

    return $count;
}


echo countNumber([1,2,3,4,6,7,9,6,6,6,9], 6);