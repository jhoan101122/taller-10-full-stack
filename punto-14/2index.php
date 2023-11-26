<?php
function hasSecurityLong($pass) {
  return strlen($pass) >= 8;
}

function hasUperLetter($pass) {
  foreach (str_split($pass) as $char) {
    if (ctype_upper($char)) {
      return true;
    }
  }
  return false;
}
function hasNumber($pass) {
  foreach (str_split($pass) as $char) {
    if (is_numeric($char)) {
      return true;
    }
  }
  return false;
}
?>