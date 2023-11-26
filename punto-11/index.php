<?php
$num = 0;

for($i = 1; $i <=100; $i = $i + 2){
  echo $i . "\n";

  $num += $i;
}
echo "la sumatoria de los numeros impares hasta el 100 es: " . $num;
?>