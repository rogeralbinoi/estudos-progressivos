<?php 
// Igual - Verifica apenas se o valor é igual, não comparando os tipos.
$a = 0;
$b = '0';
var_dump($a == $b); // True

// Identico
var_dump($a === $b); // False

// Diferente
var_dump($a != $b); // False
var_dump($a <> $b); // False

// Não idêntico
var_dump($a !== $b); // True

// Menor que
var_dump($a < $b); // False

// Maior que 
var_dump($a > $b); // False

// Menor ou igual que 
var_dump($a <= $b); // True

// Maior ou igual que
var_dump($a >= $b); // True


