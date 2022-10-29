<?php
$nota1 = 10;
$nota2 = 9;
$nota3 = 8;
$media = ($nota1 + $nota2 + $nota3)/3;
echo $media;
if ($media >= 6) {
  echo "Maira está aprovada.";
} elseif ($media >= 4){
  echo "Maira está de recuperação.";
} else {
  echo "Maíra está reprovada.";
}
