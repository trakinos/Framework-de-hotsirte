<?php
function calculo($a, $b) {
  $saldo = 0;
  for ($x=1; $x < $b; $x++) {
    $saldo = ($saldo + $a)*1.01;
    echo $saldo."<br />";
  }
  }
calculo (500, 240);
