<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);  
    while ($temp != 0) {
        $remainder = $temp % 10;
        $sum += $remainder ** $numDigits;
        $temp = (int)($temp / 10);
    }  
    return $sum === $number;
}
$number = 225;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number";
} else {
    echo "$number is not an Armstrong number";
}
?>
