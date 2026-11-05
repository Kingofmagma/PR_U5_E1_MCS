<?php

$texto = "Hola mundo 1. Hola PHP.
Este es un ejercicio. Hola mundo.";

// 1. Caracteres sin espacios ni saltos de línea
function caracteres($texto) {
    return mb_strlen(preg_replace('/\s/u', '', $texto));
}

// 2. Número de palabras
function palabras($texto) {
    preg_match_all('/[\p{L}\p{N}]+/u', $texto, $resultado);
    return count($resultado[0]);
}

// 3. Número de frases
function frases($texto) {
    $resultado = preg_split('/[.!?]+/', $texto, -1, PREG_SPLIT_NO_EMPTY);
    return count($resultado);
}

// 4. Número de párrafos
function parrafos($texto) {
    $resultado = preg_split('/\n\s*\n/', trim($texto));
    return count($resultado);
}

// 5. Promedio de letras por palabra
function promedioLetras($texto) {
    preg_match_all('/\p{L}/u', $texto, $letras);
    return palabras($texto) ? count($letras[0]) / palabras($texto) : 0;
}

// 6. Promedio de palabras por frase
function promedioPalabras($texto) {
    return frases($texto) ? palabras($texto) / frases($texto) : 0;
}

// 7. Promedio de frases por párrafo
function promedioFrases($texto) {
    return parrafos($texto) ? frases($texto) / parrafos($texto) : 0;
}

// 8. Letra moda
function letraModa($texto) {
    preg_match_all('/\p{L}/u', mb_strtolower($texto), $letras);
    $frecuencias = array_count_values($letras[0]);
    return empty($frecuencias) ? "Ninguna" : array_search(max($frecuencias), $frecuencias);
}

// 9. Palabra moda
function palabraModa($texto) {
    preg_match_all('/[\p{L}\p{N}]+/u', mb_strtolower($texto), $palabras);
    $frecuencias = array_count_values($palabras[0]);
    return empty($frecuencias) ? "Ninguna" : array_search(max($frecuencias), $frecuencias);
}

// Mostrar resultados
echo "Caracteres: " . caracteres($texto) . "<br>";
echo "Palabras: " . palabras($texto) . "<br>";
echo "Frases: " . frases($texto) . "<br>";
echo "Parrafos: " . parrafos($texto) . "<br>";
echo "Promedio de letras por palabra: " . round(promedioLetras($texto), 2) . "<br>";
echo "Promedio de palabras por frase: " . round(promedioPalabras($texto), 2) . "<br>";
echo "Promedio de frases por parrafo: " . round(promedioFrases($texto), 2) . "<br>";
echo "Letra moda: " . letraModa($texto) . "<br>";
echo "Palabra moda: " . palabraModa($texto) . "<br>";

?>