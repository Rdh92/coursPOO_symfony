<!-- /*
    la poo:

    les inconvénients=>
    -Techniquement, on ne peut rien faire de plus avec l'orienté objet qu'avec le procédural.
    -En général, l'approche orienté objet est moins intuitive pour l'esprit humain.
    -Légère perte de performance

    Les avantages=>
    -Organisation du code :
    Un code organisé sous forme de classes (objets) et cela va fortement nous aider à nous retrouver dans notre code => développer plus vite.

    En exemple d'organisation : 
    -Des models pour l'accès aux données.
    -Des controllers pour les différentes actions (ajouter, supprimer ou maj d'un article).
    -Des classes statiques pour toutes les fonctionnalités utilitaire.

    - Sécurité dans le code avec l'encapsulation : 
    Cela va nous permettre de sécuriser le code vis à vis d'éventuelles erreurs que l'on pourrait commettre, ex: ne pas modifier uen variable, au risque de casser le code.


    - Réutilisation du code via l'héritage : 
    Cela va nous permettre la réutilisation de notre code et son éventuelle évolution.

    Un model et ses enfants:
        
        class Felin{
            public $taille; // Ici on a  des variables qu isont en réalités des propriétés au sein d'une class
            public $pelage;
            public $age;


        }

        class Chat extends Felin{
            public function miauler(){ // Au sein d'une class les fonctions sont appelées méthodes
                return 'miaou';
            }
        }

        $chat1 = new Chat();// On fait une instance de la classe Chat avec le mot clé new, on obtient alors un objet $chat1.

        $chat1->taille =  '20cm'; // Pour accéder aux propriétés ou méthodes d'obejets on utilise l'opérateur -> (attention pas de $).

        echo $chat1->taille; // 20cm

        $chat1->miauler(); // retourne: miaou;


    Contrôle du code: l'abstraction et les interfaces
        -Un terme technique qui signifie que l'on veut obliger certaines classes a implémenter telle propriété ou telle méthode.

        interface Griffeur{
            public function griffer();
        }

        class Chat extends Felin implements Griffeur{
            public function miauler(){ // Au sein d'une class les fonctions sont appelées méthodes
                return 'miaou';
            }

            public function griffer(){
                return 'griffe!';
            }
        }
*/ -->

<?php
$nom = 'Dupont';
$prenom = 'Celine';
$age = '30';

$nom2 = 'Wayne';
$prenom2 = 'Bruce';
$age2 = '54';

function presentation($nom, $prenom, $age){
    print_r("Bonjour je m'appelle $nom $prenom et j'ai $age ans <br>");
}

presentation($nom, $prenom, $age);

presentation($nom2, $prenom2, $age2);

?>