<?php

//Asignacion

$num = 9;
$lang = [
  'es' => 'español',
  'en' => 'english'
];

// Aritmetica

echo 'Suma 2 + 2 ' . ((int) 2 + (int) 2);
echo 'Resta 2 - 2 ' . ((int) 2 - (int) 2);
echo 'Multiplica 2 * 2 ' . 2 * 2;
echo 'Divide 2 / 2 ' . 2 / 2;
echo 'Modulo 2 % 2 ' . 2 % 2;
echo 'Exponencial 2 ** 2 ' . 2 ** 2;

/*
  Comparación

  Igual ==, valor '9' == 9 --> Comparación de valores
  Igual ===, valor - tipo 9 === 9 --> Comparacion de valores y tipo de dato

  Diferencias !=, valor
  Diferencias !==, valor - tipo

  <, >, <=, >=
*/

/*
Variables variables, basicamente a partir de un valor se llama a  
una variable con el mismo nombre, en este caso usando $$ se 
llama a la variable name haciendo uso del valor 'name'.
*/

$app = 'name';
$name = 'Platzi';

echo $app; // output: name
echo $$app; // output: Platzi```