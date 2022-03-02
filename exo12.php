<h1>Exercise 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG </p>
    
    <h2>Résultat</h2>
    
    <?php
    

    $prenoms = ["Mickaël" => "Salut", "Virgile" => "Hola", "Marie-Claire" => "Hello" ];

    // Affichage 1 :

    foreach($prenoms as $cle => $valeur) { 
        echo $valeur . "   ". $cle . "<br>";
    }
    
    // Affichage 2 :
    
    ksort($prenoms);
    foreach($prenoms as $cle => $valeur) {
        echo $valeur . "   ". $cle . "<br>";;
}


/*

Affichage1 :

Salut Mickaël
Hola Virgile
Hello Marie-Claire

Variante : trier d’abord le tableau par ordre alphabétique du prénom

Affichage2 :
Hello Marie-Claire
Salut Mickaël
Hola Virgile


*/



?>
