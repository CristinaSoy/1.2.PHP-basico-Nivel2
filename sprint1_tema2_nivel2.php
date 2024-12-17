<?php
echo "<h1>Sprint 1. Tema 2. Nivell 2.</h1>";
echo"<h3>Exercici 1. Cost d'una trucada telefónica.</h3>";

define("MINUTS_INICIAL", 3); //min
define ("COST_INICIAL",10); //Centims
define ("COST_ADICIONAL", 5); // Centims
$duracio = 108;

function calculaCost($duracio) : float {
    if ($duracio <= MINUTS_INICIAL) {
        return COST_INICIAL;
    }
    $cost = (COST_INICIAL + 
    (($duracio-MINUTS_INICIAL) * COST_ADICIONAL));
    return $cost;
}

echo "El cost d'una trucada de $duracio minuts és de ". calculaCost($duracio). "€.";

echo"<h3>Exercici 2. Afegeix subtotals al carret de la compra.</h3>";

$tarifari = [
    "xocolates"=> 1,
    "xiclets"=> 0.50,
    "caramels"=> 1.5,
];


function calculaSubtotal($producte, $unitats): float {
    global $tarifari;
    $subtotal= $tarifari[$producte] * $unitats;
    echo "$unitats $producte Subtotal: $subtotal €.<br>";  
    return $subtotal;
}

function calculaTotal() : float {
    $total = calculaSubtotal("xocolates", 2)+
            calculaSubtotal("xiclets", 1)+
            calculaSubtotal("caramels", 1);
    return $total;
}

$total = calculaTotal();
echo "Total final $total €.";

?>