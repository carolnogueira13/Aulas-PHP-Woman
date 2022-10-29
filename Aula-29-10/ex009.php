<?php
echo("Opções \n1 - Português \n2 - Inglês \n3 - Espahol \n");
$idioma = readline("Digite: ");
# Comando readline - input para o sistema
switch ($idioma) {
  case 1:
  echo ("Bem-vindo!");
  break;
  case 2:
  echo ("Welcome!");
  break;
  case 3:
  echo ("Bienvenido!");
  break;
  default:
  echo ("Opção inválida!");
}
