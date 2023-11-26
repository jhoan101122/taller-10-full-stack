<?php
function getNumber(){
  echo "ingrese un numero para operar \n";
   return readline();
}

function showMenu(){
  echo "elija la opcion para realizar la operacion \n";

  echo "+ -> \n";
  echo "- -> \n";
  echo "* -> \n";
  echo "/ -> \n";
  return readline();
}

function operate($x, $y, $option){
  switch($option){
    case "+":
    return add($x, $y);
    case "-": 
    return sub($x, $y);
    case "*": 
    return dot($x, $y);
    case "/": 
    return split($x, $y);
    default:
    echo "opcion no valida";
      return 0;
  }
  return; 
}

function add($x,$y){
  return $x + $y;
}
function sub($x, $y){
  return $x - $y;
}

function dot($x, $y){
  return $x * $y;
}

function split($x, $y){
  return $x / $y;
}
?>