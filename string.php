<?php
$strings = ["Hello", "World", "PHP", "Programming"]; //it is not a string its an array 


foreach ($strings as $str) {
    // Counting the number of vowels
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $str);

    // Reversing the string
    $reversedStr = strrev($str);

    // Print original string, reversed string, and vowel count
    echo "Original String: $str"." Vowel Count: $vowelCount"." Reversed String: $reversedStr\n";
}





?>
