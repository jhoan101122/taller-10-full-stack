<?php
const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

echo "Digite el numero de personas que entraran a la bolera: \n";
$personNumber = readline();

echo "Digite el tipo de membresia: \n";
$membershipType = readline();

$totalPay = $personNumber * TICKET_PRICE;

if (strtoupper($membershipType) == "A"){
$totalPay = $totalPay * 0.7;
}else if (strtoupper($membershipType) == "B"){
$totalPay = $totalPay * 0.75;
}else if (strtoupper($membershipType) == "C"){
$totalPay = $totalPay * 0.9;
}else if (strtoupper($membershipType) == "D"){
$totalPay = $totalPay * 0.95;
}

echo "El total a pagar es $" . number_format($totalPay);
?>