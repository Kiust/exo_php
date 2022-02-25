<h1>Exercise 4</h1>
<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2>Résultat</h2>


<?php

$phrase = " Engage le jeu que je le gagne est palindrome ";


if (stripos($phrase, "palindrome") !== false) {
    echo "La phrase" . $phrase;
}



?> 