<?php
function calculo($a, $b) {
  $saldo = 170;
  $saldo_inicial = $saldo;
  for ($x=1; $x < $b; $x++) {
    $saldo = ($saldo + $a)*1.01;
    $diferenca = (($saldo/$saldo_inicial)*100)."%";
    echo $x." - ".$saldo." - ".$diferenca."<br />";
  }
}
calculo (170, 120);
