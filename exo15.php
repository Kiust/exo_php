<h1>Exercise 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge. <br>
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; <br>
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Résultat</h2>

<?php

// classe
class Personne
{

    // attributs
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    

    // methodes
    public function __construct(string $nom, string $prenom, string $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    // Getters (accesseurs)
    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getDate()
    {
        return $this->_dateNaissance;
    }

    // Setters (mutateurs)
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getAge() {
        $aujourdhui = new DateTime();
        $diff = date_diff($this->_dateNaissance, $aujourdhui);
        return $diff->format('%y ans');

    }

    public function __toString()
    {
        return $this->_prenom . " " . $this->_nom ." ".$this->_dateNaissance->format("d/m/Y")." a ".$this->getAge()."<br>";
    }
};

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1;
echo $p2;
$p2->setNom("BIDULE");
echo $p2;




//  echo "si la date courante est le ".$aujourdhui->format("d/m/Y") ." et la date de naissance le ".$dateNaissance->format("d-m-Y"). "<br>
//  Age de la personne : ".$diff->format('%y ans %m mois %d jours');







?>

<!-- 
Affichage :
Michel DUPONT a ... ans
Alice DUCHEMIN a ... ans -->