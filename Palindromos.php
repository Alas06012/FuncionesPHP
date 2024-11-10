<?php
function esPalindromo($texto) {
    $texto = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $texto)); // Convertimos a minúsculas y eliminamos caracteres no alfanuméricos
    $reversa = strrev($texto); // Invertir texto

    return $texto === $reversa ? "(".$texto.") Si es un palindromo \n" : "(".$texto.") No es un palindromo \n"; // Comparamos si el texto original es igual a su reversa
}

print_r(esPalindromo("Anita lava la tina")); 
print_r(esPalindromo("Hola mundo")); 
?>
