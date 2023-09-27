<?php
/*
Task 5: Password Generator

Create a PHP function called generatePassword($length) that generates a random password of the specified length.
The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+).
Write a PHP program to generate a password with a length of 12 characters
using this function and print the password.
*/

function generatePassword($length){
    $array_pass = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u',
    'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', 1, 2, 3, 4, 5, 6,7, 8, 9, 0);
    $pass = "";
    for($i=0; $i<12; $i++){
        $randomKey = array_rand($array_pass);
        $pass_item = $array_pass[$randomKey];
        //echo $pass_item;
        $pass = $pass . $pass_item;
    }
    echo "\n";
    echo "Password: $pass";

}
$length = 12;
generatePassword($length)

?>