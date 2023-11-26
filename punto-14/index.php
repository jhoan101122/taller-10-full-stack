<?php
include "./passwordchec.php";

$user="";
$password = "";

echo "digite su nombre de usuario: \n";
$user = readline();

echo "digite su contraseña: \n";
$password= readline();

if (hasSecurityLong($password)){
  if(hasUperLetter($password)){
    if(hasNumber($password)){
      echo "su contraseña es segura y quedo registrada \n";
  
}else{
  echo "su contraseña no tiene una longitud valida \n";
}
}else{
  echo "su contraseña no tiene ninguna letra en mayuscula \n";
}
}else{
  echo "su contraseña no tiene numero \n";
}
  
?>