<h1>Exercise 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php

// TABLEAUX ASSOCIATIFS
// clé (key) -> valeur (value) (clé doit être unique)


$eleves = [
    "Gabriel" => [ 10, 12, 8, 19, 3, 16, 11, 13, 9],
    "Barbara" => [8, 9, 12],
    "Giulia" => [8]
];

foreach($eleves as $prenom => $notes) {
    
    //********** 2nd option array in the array */
    // foreach ($notes as $note) {
    //     echo $note." ";
    // }

    echo "Les notes obtenues sont : ".implode(",", $notes)."<br>";
    echo "La moyenne de $prenom est : ".calculerMoyenne($notes)."<br><br>";

}

function calculerMoyenne(array $notes) : float {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}

/* Développement


Affichage :
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
Sa moyenne générale est donc de : 11.22
*/

?>
