<h1>Exercise 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php

$francs = 100;
$euros = 15.24;
$coeff = 0.1524;
$convert = $francs * $coeff;

echo "Montant en francs: $convert €<br>", "$francs francs = $euros" ;


/* 

Affichage :
Montant en francs : 100
100 francs = 15.24 €

?>
