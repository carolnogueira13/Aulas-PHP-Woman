<?php
$x = 500;
$y = 830;
echo ($soma = $x + $y) . "\n";
echo ($subtracao = $x - $y) . "\n";
echo ($multiplicacao = $x * $y) . "\n";
echo (number_format($divisao = $x / $y, 2)) . "\n"; // number_format para formatar o echo com o número de casas decimais que quiser, nesse caso duas 
echo ($resto = 15 % 2) . "\n";
echo ($potencia = 3 ** 2);