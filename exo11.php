<h1>Exercise 11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.
</p>

<h2>Résultat</h2>

<?php

$voitures = array ("Peugeot", "Renault", "BMW", "Mercedes");

echo "Il y a  " .count($voitures) ."  marques de voitures dans le tableau :" ." <br />"; 
echo "<ol>";

foreach($voitures as $marque) {
    echo "<li>".$marque."</li>";
}
echo "</ol>";

/* Développement

Affichage (attention à utiliser une liste à puces)
Il y a 4 marques de voitures dans le tableau :
Peugeot
Renault
BMW
Mercedes

*/

?>
