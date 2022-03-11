<h1>Exercise 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php


    date_default_timezone_set('UTC');

	$dateNaissance = new DateTime("1995-05-15");
	$aujourdhui = new DateTime();

    // put dates in crescendo order ($hold, $recent)
	$diff = date_diff($dateNaissance, $aujourdhui);
    
    // show data of $diff
    // var_dump($diff);
    echo "si la date courante est le ".$aujourdhui->format("d/m/Y") ." et la date de naissance le ".$dateNaissance->format("d-m-Y"). "<br>
	Age de la personne : ".$diff->format('%y ans %m mois %d jours');





/*
Affichage (si la date courante est le 21/05/2018 et la date de naissance le
17/01/1985 :
Age de la personne : 33 ans 4 mois 4 jours

?>