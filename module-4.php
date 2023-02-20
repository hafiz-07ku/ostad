<?php

/**
 * Instruction: To complete the assignment, create a PHP file and write the code for each of the above functions. You should also include example usage for each function, to show that it is working correctly.
*/


/**
 * 1. Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
*/
$array = array(9, 4, 14, 3, 5);

function ascendingOrder($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

usort($array, "ascendingOrder");

print_r($array);

echo PHP_EOL;
/**
 * 2. Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
*/
function stringConcatenation($string1, $string2) {
    return $string1 . ' ' . strrev($string2);
}

echo stringConcatenation('Hello World', 'Hello PHP');

echo PHP_EOL;

/**
 * 3. Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
*/
function firstLastRemove(array $array) {
    array_pop($array);
    array_shift($array);
    return $array;
}

$inputs = ['Pinnaple', 'Orange', 'Apple', 'Strawberry', 'Guava', 'Coconut'];

print_r(firstLastRemove(($inputs)));

echo PHP_EOL;

/**
 * 4.Write a PHP function to check if a string contains only letters and whitespace.
*/
function checkLetterWhitespace($string)
{
    $result =  preg_match('/^[a-zA-Z\s]+$/', $string) === 1;

    if ($result) {
        return "The given string only contains letter and whitespace\n";
    } else {
        return "The given sting contains other characters except letter and whitespace\n";
    }
}

$string1 = 'This is a string with only letters and whitespace';
$string2 = 'This is a string with some numbers: 12345';

echo checkLetterWhitespace($string1);
echo checkLetterWhitespace($string2);

echo PHP_EOL;

/**
 * 5.Write a PHP function to find the second largest number in an array of numbers.
*/

function secondLargestNumber($array) {
    rsort($array);

    return $array[1];
}

$inputs = [5, 3, 22, 12, 30];

echo secondLargestNumber($inputs);