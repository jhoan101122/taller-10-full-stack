<?php
$numberOne=0;
$numberTwo=0;
$operation=0;
$result=0;

echo "digite el primer numero: ";
$numberOne=readline();
echo "digite el segundo numero: ";
$numberTwo=readline();
echo "elija la opcion para realizar la operacion \n";
  
echo "+ -> \n";
echo "- -> \n";
echo "* -> \n";
echo "/ -> \n";
$operation=readline();
switch($operation){
  case "+":
  $result=$numberOne+$numberTwo;
    break;
  case "-":
  $result=$numberOne-$numberTwo;
    break;
  case "*":
  $result=$numberOne*$numberTwo;
    break;
  case "/":
  $result=$numberOne/$numberTwo;
    break;
  default:
  echo "la operacion digitada no es valida ";
}
echo "el resultado de la operacion es: " . $result;
?>