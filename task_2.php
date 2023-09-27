<?php
/*
Task 2: Array Manipulation

Create an array called $numbers containing the numbers 1 to 10.
Write a PHP function which takes the "$numbers" array as an argument
to remove the even numbers from the array and print the resulting array.
*/


function oddNumbers($numbers){
    for($i=0; $i<10; $i++){
        if($numbers[$i] % 2 == 0){
            unset($numbers[$i]);
        }
    }
    print_r($numbers);
}


$numbers = range(1,10);
oddNumbers($numbers);

?>