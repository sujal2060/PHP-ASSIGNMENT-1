<?php
function isPalindrome($number) {
    $originalNumber = $number;
    $reversedNumber = 0;
    
    while ($number != 0) {
        $remainder = $number % 10;
        $reversedNumber = $reversedNumber * 10 + $remainder;
        $number = (int)($number / 10);
    }
    
    return $originalNumber == $reversedNumber;
}

$number = 12321;

if (isPalindrome($number)) {
    echo "$number is a palindrome number.\n";
} else {
    echo "$number is not a palindrome number.\n";
}
