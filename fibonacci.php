<?php
function fibonacci($n) {
    $a = 0;
    $b = 1;
    
    echo "Fibonacci Series up to $n terms:\n";
    
    for ($i = 1; $i <= $n; ++$i) {
        echo "$a, ";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    echo "\n";
}

fibonacci(10);
