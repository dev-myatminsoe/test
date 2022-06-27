<?php

function transformedArray(array $inputArray) : array {
    $left = [];
    $mid = [];
    $right = [];
    $isLeft = true;
    foreach ($inputArray as $item) {
        if ($item == 0) {
            if ($isLeft) {
                $left[] = $item;
            } else {
                $right[] = $item;
            }
            $isLeft = !$isLeft;
        } else {
            $mid[] = $item;
        }
    }

    return array_merge($left, $mid, $right);
    
}

var_dump(transformedArray([3,5,6,0,7,0,1]));
var_dump(transformedArray([5,0,0,6,0,8]));