<?php
#DESAFIO TABUADA
$num1 = readline("Digite um número para saber a tabuada dele: ");
for($i=1; $i <= 10; $i++) {
    echo ($num1 ." X $i= " .$num1 * $i .PHP_EOL);
}
