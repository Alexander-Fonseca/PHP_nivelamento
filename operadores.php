<?php

//Operadores matemáticos
// echo $numero1 + $numero2;
// echo'<br>';
// echo 10 - $numero1;
// echo'<br>';
// echo 10 * 5;
// echo'<br>';
// echo 10 / 5;
// echo'<br>';
// echo 10 % 6;
// echo'<br>';
// echo 2 ** 3;

//Operadores de comparação
$numero1 = 6;
$numero2 = 10;

// var_dump($numero1 < $numero2);
// var_dump($numero1 <= $numero2);

// var_dump($numero1 > $numero2);
// var_dump($numero1 >= $numero2);

// var_dump($numero1 == $numero2);
// var_dump($numero1 === $numero2);

// var_dump($numero1 != $numero2);
// var_dump($numero1 !== $numero2);

//Operadores lógicos
$idade = 17;

var_dump(($idade > 18) && ($idade <65));
var_dump(($idade > 18) || ($idade <65));

$casado = true;
var_dump(!$casado);