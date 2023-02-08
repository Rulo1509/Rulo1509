<?php

$cad = "******************";
$cad1 = " ";

for ($x = 0; $x <= 10; $x++) {
  for ($y = 0; $y < $x; $y++) {
    echo "$cad1";
  }
  echo "$cad <br>";
  $cad = substr($cad, 2);
}

?>

