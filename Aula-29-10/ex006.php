<?php
$nota1 = readline("Digite a sua 1ª nota: ");
$nota2 = readline("Digite a sua 2ª nota: ");
$nota3 = readline("Digite a sua 3ª nota: ");
$media = ($nota1 + $nota2 + $nota3)/3;
if ($media >= 6) {
  echo ("Maira está aprovada. Média " .(number_format($media, 2)));
} elseif ($media >= 4){
  echo ("Maira está de recuperação. Média " .(number_format($media, 2)));
} else {
  echo ("Maíra está reprovada. Média " .(number_format($media, 2)));
}
