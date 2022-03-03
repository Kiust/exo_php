<h1>Exercise 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
</p>

<h2>Résultat</h2>

<?php


$aPayer = 120;
$verse = 200;
$resteApayer = $verse - $aPayer;

$billet10 = intdiv($resteApayer, 10);
$resteApayer = $resteApayer - $billet10 * 10;

$billet5 = intdiv($resteApayer, 5);
$resteApayer = $resteApayer - $billet5 * 1;

$billet2 = intdiv($resteApayer, 2);
$resteApayer = $resteApayer - $billet2 * 1;

$billet1 = intdiv($resteApayer, 1);
$resteApayer = $resteApayer - $billet1 * 1;

echo "Montant à payer : $aPayer €<br />", "Montant versé : $verse €<br />",
"Reste à payer : $resteApayer €<br />", "********************<br />", "Rendue de monnaie : <br />",
"$billet10 billets de 10 €  - ", "$billet5 billets de 5 €  - ", 
"$billet2 pièce de 2 €  -  ", "$billet1 pièce de 1 €";

/* 

Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €

*/

?>