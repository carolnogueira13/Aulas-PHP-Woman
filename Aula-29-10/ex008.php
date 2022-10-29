<?php
$idioma = readline("Digite 1 - Português, 2 - Inglês, 3 - Espahol: ");
# Comando readline - input para o sistema
switch ($idioma) {
  case 1;
  echo ("Bem-vindo!");
  break;
  case 2;
  echo ("Welcome!");
  break;
  case 3;
  echo ("Bienvenido!");
  break;
  default;
  echo ("Opção inválida!");
}
