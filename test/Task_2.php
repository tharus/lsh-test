<?php

// I am not using PHP built in functions here

function reformat($sentence) {
    $vowels = array("A", "E", "I", "O", "U", "a", "e", "i", "o", "u");
    $output = "";
    $first_letter = true;

    //loo through the sentence
    for ($i = 0; $i < strlen($sentence); $i++) {
        //check whether vowel is their
        if (in_array($sentence[$i], $vowels)) {
            continue;
        }

        //make first letter capital and others simple
        if ($first_letter) {
            $output .= strtoupper($sentence[$i]);
            $first_letter = false;
        } else {
            $output .= strtolower($sentence[$i]);
        }
    }
    return $output;
}

echo reformat('liMeSHArp DeveLoper TEST');

?>