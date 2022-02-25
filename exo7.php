<h1>Exercise 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
    Poussin : entre 6 et 7 ans
    Pupille : entre 8 et 9 ans
    Minime : entre 10 et 11 ans
    Cadet : à partir de 12 ans
    Si la catégorie n’est pas gérée, merci de le préciser.</p>
    
    <h2>Résultat</h2>
    
    <?php

//commencer par les numéro positif plus grand pour les supérieur ou égal ****refactoring****** 

$age = 7;

if ($age >= 12) {
    $categorie = "Cadet";
} elseif ($age >= 10) {
    $categorie = "Minime";
} elseif ($age >= 8) {
    $categorie = "Pupille";
} elseif ($age >= 6) {
    $categorie = "Pupille";
    
} else {
    echo "Veuillez saisir un âge";
}
echo "La personne qui a $age ans appartient à la catégorie : $categorie";


/*  
if ($age >= 12) {
    $categorie = "Cadet";
} elseif ($age >= 10 && $age <= 11) {
    $categorie = "Minime";
} elseif ($age >= 8 && $age <= 9) {
    $categorie = "Pupille";
} elseif ($age >= 6 && $age <= 7) {
    $categorie = "Pupille";
    
} else {
    echo "Veuillez saisir un âge";
}
echo "La personne qui a $age ans appartient à la catégorie : $categorie";

*/

    

/*

Affichage :
L’enfant qui a 10 ans appartient à la catégorie « Minime »

*/



?>