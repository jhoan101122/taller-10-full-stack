<?php
$name="";
$years=0;

echo "digite su nombre: ";
$name=readline();

echo "digite su edad: ";
$years=readline();

if($years>=18){
  echo "bienvenido " . $name . " eres mayor de edad";
}
else if($years<=18){
  echo"bienvenido " . $name . " eres menor de edad"; ;
}

?>