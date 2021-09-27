<?php

$vat = 15;


$priceExcludingVat = 180;

$vatToPay = ($priceExcludingVat / 100) * $vat;


$totalPrice = $priceExcludingVat + $vatToPay;


echo "The amount of vat : ".($vatToPay). "<br>";
echo  "Total amount : ".($totalPrice). "<br>";


?>