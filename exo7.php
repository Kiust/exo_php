<h1>Exercise 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.

<h2>Résultat</h2>

<?php


// En fonction de l'âge, afficher une catégorie
/*
    si la personne a plus de 30 ans --> SENIOR
    si la personne a plus de 20 ans --> CADET
    sinon JUNIOR
*/

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    if($age >= 30) {
        $resultat = "Senior";
    } elseif($age >= 20) {
        $resultat = "Cadet";
    } else {
        $resultat = "Junior";
    }
    
    echo "La personne qui a $age ans est : $resultat<br>";
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}


/*

Affichage :
L’enfant qui a 10 ans appartient à la catégorie « Minime »

*/

?>