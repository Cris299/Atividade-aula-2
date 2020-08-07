<?php
    echo "Par ou Impar " . PHP_EOL;
    $num1 = readline("Digite um numero para saber se é par ou impar:\n");
    echo $num1 % 2 == 0 ? "O número digitado foi o $num1 e ele é par" :  " O número digitado foi o $num1 e ele é impar" ; 
?>