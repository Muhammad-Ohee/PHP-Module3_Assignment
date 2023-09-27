<?php

/*
Task 1: String Manipulation

Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.".
Write a PHP function which takes "$text" as an argument to:
Convert the string to all lowercase.
Replace "brown" with "red" in the string.
Print the modified text.
*/

function stringManipulation($text){
    $haystack = strtolower($text);
    //echo $haystack;
    $needle = "brown";
    $count = 0;
    if($needle !== '' && str_contains($haystack,$needle)){
        $updated_haystack = str_replace("brown", "red", $haystack, $count);
        echo $updated_haystack;
        //echo "\n";
        //echo $count; //returns how many times replaced the string.
    }


}

$text =  "The quick brown fox jumps over the lazy dog.";
stringManipulation($text);

?>