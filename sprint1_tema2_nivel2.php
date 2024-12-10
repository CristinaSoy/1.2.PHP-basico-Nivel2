<?php
echo "<h1>Sprint 1. Tema 2. Nivell 2.</h1>";
echo"<h3>Exercici 1. Cost d'una trucada telefónica.</h3>";

$MINUTS_INICIAL = 3;
$COST_INICIAL = 10; //Centims

$minutsAdicionals = 8;
$COST_ADICIONAL = 5; // Centims

public function calculaCostTrucada($duracio) {

if ($duracio <= MINUTS_INICIAL) {
    return $COST_INICIAL;
}
$cost = ($COST_INICIAL + 
(($duracio-$MINUTS_INICIAL) * $COST_ADICIONAL));

return $cost;



?