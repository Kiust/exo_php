<h1>Exercise 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Résultat</h2>

<?php

$age = 22;
$sex = "f";

//first option

$condition1 = ($sex == "f" || $sex == "femme") && ($age >= 18 && $age <= 35);
$condition2 = ($sex == "h" || $sex == "homme") && ($age >= 20);


if ($condition1 || $condition2) {
    echo "Age : $age <br/>", "Sexe : $sex <br/>", "La personne est imposable.";
} else {
    echo "Age : $age <br/>", "Sexe : $sex <br/>", "La personne est non imposable.";
}


//second option

if (($sex == "f" || $sex == "femme") && ($age >= 18 && $age <= 35)) {
    echo "Age : $age <br/>", "Sexe : $sex <br/>", "La personne est imposable.";

} elseif (($sex == "h" || $sex == "homme") && ($age >= 20)) {
    echo "Age : $age <br/>", "Sexe : $sex <br/>", "La personne est imposable.";

} else {
    echo "Age : $age <br/>", "Sexe : $sex <br/>", "La personne est non imposable.";
}


//therd option 

if (($sex == "f" || $sex == "femme") && ($age >= 18 && $age <= 35) || (($sex == "h" || $sex == "homme") && ($age >= 20))) {
    echo "Age : $age <br/>", "Sexe : $sex <br/>", "La personne est imposable.";
} else {
    echo "Age : $age <br/>", "Sexe : $sex <br/>", "La personne est non imposable.";
}

/*

Affichage :
Age : 32
Sexe : F
La personne est imposable.

*/

?>