<?php

// exemplo saldo com condicional

$saldo = 100;
$temChequeEspecial = true;
$valorParaSacar = 80;

$temSaldoliberado = $valorParaSacar <= $saldo;
$podeSacar = "Não pode sacar!";

if ($temSaldoliberado || $temChequeEspecial){
  $podeSacar = "Pode!";
  $novoSaldo = $saldo - $valorParaSacar;;
}

echo $podeSacar;
