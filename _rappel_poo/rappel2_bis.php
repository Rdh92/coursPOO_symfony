<?php


interface Travailleur{
    public function travailler();
}

class Employe implements Travailleur{
   public $nom; //Ici nous avons les propriétés de notre classe
   public $prenom;
   protected $age;
   
   //La fonction construct est une méthode 'magique' de PHP, elle s'exécute automatiquement à l'instanciation de la classe
   public function __construct($nom, $prenom, $age) {
       
       echo 'toto <br>'; //Petit test de fonction, on aura un 'toto' à chaque instanciation
       $this->nom = $nom; // $this->nom Fait référence à la propriété nom de notre classe et $nom est le paramètre attendu
       $this->prenom = $prenom;
       $this->setAge($age); //On utilise notre setter pour profiter de sa sécurité
   }

   

   //Les setters et les getters (accesseurs et mutateurs) nous permettent d'accèder à nos propriétés privés depuis l'extérieur de la classe
   public function setAge($age){
       if(is_int($age) && $age >= 16 && $age <= 99){ //On vérifie bien notre setter n'accepte que les entiers
           $this->age = $age;
       }else{
            die('Erreur: age doit être un entier entre 16 et 99');
       }
       
   }

   public function getAge(){
       return $this->age;
   }

   public function presentation() { //Ici nous avons une fonction dite méthode de notre classe

       print_r("Bonjour je m'appelle $this->nom $this->prenom, et j'ai $this->age ans <br>");
   }

   public function travailler(){
     return 'Je charbonne';
   }
}

class Patron extends Employe{
    public $salaire; //On surcharge la classe avec une nouvelle propriété

    public function __construct($nom, $prenom, $age, $salaire){
        parent::__construct($nom, $prenom, $age);
        $this->salaire = $salaire;
    }

    public function riche() { //Ici on surcharge avec une nouvelle méthode
        echo 'Je suis blindé <br>';
    }

    public function presentation() { //Ici nous redéfinissons la méthode presentation() de Employe

        return("Bonjour je m'appelle $this->nom $this->prenom, et j'ai $this->age ans et $this->salaire, {$this->riche()} <br>");
    }

    public function travailler(){
        return 'Je supervise ';
    }
}

class Chat implements Travailleur{
    public $couleur;

    public function travailler(){
        return ('Je ronronne');
    }
}

$employe1 = new Employe('Parker', 'Peter', 35);
$employe2 = new Employe('Madrange', 'Cecile', 40);

$patron = new Patron('Veinard', 'Jean-Michel', 56, 30000);


$chat = new Chat();

//On nous demande defaire une fonction pour faireTravailler, cette fonction attend obligatoirement un objet ayant une méthode travailler: $objet->travailler().
/*

    Pour répondre à la demande du client nous décidons de créer une onterface 'Travailleur' ayant une méthode abstraite 'travailler()' pour forcer les classes qui l'implémenterait à redéfinir cette même méthode.
*/
function faireTravailler(Travailleur $objet) {
     print_r("Travail en cours:" . $objet->travailler() . "<br>");
  
}

faireTravailler($chat); // Toutes classes peux implémenter l'interface Travailleur (même Chat) à condition de respecter le contrat => redéfinir la méthode. 
faireTravailler($patron);
faireTravailler($employe1);

$employe1->presentation();
$patron->presentation();
$patron->riche();





// $employe1->nom = 'Parker';
// $employe1->prenom = 'Peter';
// $employe1->age = 20;

// $employe2->nom = 'Madrange';
// $employe2->prenom = 'Cecile';
// $employe2->age = 40;

//plusieurs centaines de lignes de code plus tard
 //  $employe1->setAge(50);

//200 lignes après


$employe1->presentation();
$employe2->presentation();