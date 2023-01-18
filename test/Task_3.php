<?php

function next_binary_number($binary_arr) {
    // check if input is a valid binary number
    foreach($binary_arr as $digit) {
        if ($digit !== 0 && $digit !== 1) {
            return "Input is not a binary number."; // if any digit of the input array is not 0 or 1, return error message
        }
    }
    $size = count($binary_arr);
    $binary_arr[$size - 1]++; // increment the last digit
    for ($i = $size - 1; $i > 0; $i--) {
        if ($binary_arr[$i] > 1) {
            $binary_arr[$i - 1] += floor($binary_arr[$i] / 2); // carry over to the next digit if the current digit is greater than 1
            $binary_arr[$i] = $binary_arr[$i] % 2;
        }
    }
    if ($binary_arr[0] > 1) {
        $binary_arr = array_merge([floor($binary_arr[0] / 2)], $binary_arr);
        $binary_arr[1] = $binary_arr[1] % 2;
    }
    return $binary_arr; // return the next binary number as an array
}


$binary_arr = [1,0,1,1,0];
print_r(next_binary_number($binary_arr));

?>