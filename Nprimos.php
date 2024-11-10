<?php
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return  $numero." No es numero primo \n"; // Si el número es divisible, no es primo
        }
    }

    return $numero." Si es numero primo \n"; 
}

print_r(esPrimo(17)); 
print_r(esPrimo(20)); 
?>
