<?php
$num = 0;

echo "digite el numero el cual quiere multiplicar: ";
$num =readline();

for( $i = 0; $i <= 30; $i++){
  $res = $num * $i;
  echo $num . " x " . $i . " = " . $res . "\n";
}
?>