<?php

interface Travailleur{
    public function travailler();
}
// déclaration de la class Employe
class Employe implements Travailleur {
    public $nom;// ici les propriétés de notre classe
    public $prenom;
    protected $age; // cette propriété est 'semi-public'

    //la fonciton construct est une méthode 'magique' de PHP, elle s'exécute automatiquement à linstanciation de la classe
     public function __construct($prenom, $nom, $age) {// le constructeur se met en marche quand on instancie la classe
        echo 'toto<br>'; // ici on teste
        $this->prenom = $prenom; //$this->prenom fais référence à la propriété nom de notre classe et $nom est le paramètre attendu
        $this->nom = $nom;
        $this->setAge($age);
    }

    public function travailler(){
        echo '<p style="color:red;font-size:18px;"> Je Charbonne </p>'
    }

    // les setter et les getters (accesseurs et mutateurs) nous permettent d'accéder à nos propriétés prives depuis l'esxtérieur de la classe

    // une fonction setter
    public function setAge($age) { //setter
        if(is_int($age) && $age >= 16 && $age <= 99) {
            $this->age = $age;
           } else {
            //    var_dump($age);
            echo "Erreur mon cher";
            //    die("Erreur mon cher"); die() arrête le programme
           }
    }

    // une fonction getter
    public function getAge($age) { // getter
        return $this->age;
    }

    public function presentation() {// ici nous avons une fonciton dite méthode notre classe
        echo "<p>Bonjour je m'appelle $this->nom $this->prenom et j'ai $this->age ans  <br>.</p>";// $this-> me permet d'accéder à la propriété
    }
}

//2 CLASSE PATRON

class Patron extends Employe {
    public $salaire; // une propriété on surchage la classe avec une nouvelle propriété

    public function __construct($nom, $prenom, $age, $salaire){
        parent::__construct($nom, $prenom, $age);
        $this->salaire = $salaire;
    }

    public function riche() { // ic on surcharge avec une méthode
        echo 'Je suis blindé';
    }

    public function presentation() { // Ici nous redéfinissons la méthode presentation() de Employe
        print_r("Bonjour je m'appelle $this->prenom $this->nom, et j'ai $this->age ans et $this->salaire,<br>");
    }
}

// déclaration d'une instance
$employe1 = new Employe('Tony', 'Stark', 43);
$employe2 = new Employe('Stephen', 'Strange', 46);


$patron = new Patron('Nick', 'Fury', 50, 50000);

function faireTravailler();
    print_r("Travail en cours: {$objet->travailler()}");

$employe1->presentation();
$patron->presentation();
$patron->riche();

// $employe1->prenom = 'Tony';
// $employe1->nom = 'Stark';
// $employe1->age = 43;
// $employe2->prenom = 'Stephen';
// $employe2->nom = 'Strange';
// $employe2->age = 46;


$employe1 -> presentation();
$employe2 -> presentation();

$patron->presentation();
$patron->riche();