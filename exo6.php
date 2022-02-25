<h1>Exercise 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2>Résultat</h2>

<?php

$quantTot = 5;
$unit = 9.99;
$tva = 0.20;
$addTva = 1.2;
$totBill = $quantTot * $unit * $addTva;


echo "Prix unitaire de l'article : $unit €<br>", "Quantité : $quantTot <br>", "Taux de TVA : $tva <br>", "Le montant de la facture à régler est de : $totBill €"  ;

/*
Affichage :
Prix unitaire de l'article : 9.99 €
Quantité : 5
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 €
*/

?>