<h1>Exercise 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme table de 8:</p>

<h2>Résultat</h2>

<table>
<?php


for($i=1; $i<11; $i++){
$number = $i * 8;
echo "<tr><td>8 X $i = $number </td></tr> \n";
}

/*

Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 ...

Remarque : proposer 2 solutions avec 2 types de boucles.

*/

?>
</table>