<?php

function generarFibonacci($n) {
    $fibonacci = []; 

    if ($n >= 1) {
        $fibonacci[] = 0;
    }
  
    if ($n >= 2) {
        $fibonacci[] = 1; 
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; // Cada término es la suma de los dos anteriores
    }

    return $fibonacci;
}

print_r(generarFibonacci(10)); 
?>
