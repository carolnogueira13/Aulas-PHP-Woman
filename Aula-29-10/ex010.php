<?php
$i = 1;
# $i++ é igual ao $i = $i + 1 (mostra primeiro, adiciona depois)
# ++$i é igual a $i = $i + 1 (adiciona primeiro, mostra depois)
while ($i <= 10) {
  echo ($i++ ."\n");
}
