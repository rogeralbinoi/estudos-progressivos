<?php
$x = "Variavel Global"; // Variavel Global
$z = 0;
echo $x; // Variavel global pode ser acessada apenas fora de funções

function hello() {
   echo "Hello";
   echo $x; // Variavel global nao pode ser acessada por uma funcao
}

hello();


// Variavel Local

function showLocal() {
    $y = "\n\nVariavel Local";	
    echo $y; // Só pode ser acessada dentro da função
}
showLocal();
echo $y; // Aqui a variavel não pode ser acessada

// Global Keyword
function showGlobal() {
   global $z;
   echo $z;
   $z = 20;
}
showGlobal();
echo $z;

function testGlobals() {
   echo $GLOBALS['x'];
}

testGlobals();

// Keyword static
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();

