<?php
class User
{
    /**
     * Attribut de la classe avec une valeur par défaut
     *
     * @var string
     */
    public $firstname = 'Julien';

    /**
     * Attribut de la classe sans valeur par défaut (=null)
     *
     * @var string
     */
    public $lastname;

    /**
     *
     * @var int
     */
    private $age = 20;

    /**
     * Constructeur de la classe : méthode appelée automatiquement
     * à l'instanciation
     * @param string|null $firstname
     * @param string|null $lastname
     */
    public function __construct($firstname = null, $lastname = null)
    {
        if (!is_null($firstname)) {
            $this->firstname = $firstname;
        }

        if (!is_null($lastname)) {
            $this->lastname = $lastname;
        }
    }

    /**
     * Méthode "magique" appelée automatiquement quand on utilise l'objet
     * comme une chaîne de caractère (par ex : faire un echo dessus)
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getFullname();
    }

    /**
     * Méthode (fonction interne) de la classe
     *
     * @return string
     */
    public function getFullname()
    {
        // $this fait référence à l'objet depuis lequel on appelle la méthode
        return trim($this->firstname . ' ' . $this->lastname);
    }

    /**
     * @return string
     */
    public function getInfos()
    {
        // dans une méthode, on peut appeler une autre méthode.
        // avec $this dans une méthode, on peut utiliser les attributs et les méthodes privées
        return $this->getFullname() . ', ' . $this->age . ' ans';
    }

    // écrire une méthode qui fait vieillir l'utilisateur d'un an
    public function birthday()
    {
        $this->age++;
    }
}

// $firstname n'existe pas en dehors de la classe
//echo $firstname;

// instanciation de la classe User
// $user est un objet instance de la classe User
$user = new User();

// la flèche permet d'accèder à l'attribut de l'objet
// sans le $ devant le nom de l'attribut
echo $user->firstname;

$user2 = new User();

// modification de la valeur de l'attribut firstname pour l'objet $user,
// n'affecte pas $user2
$user->firstname = 'Auguste';
$user->lastname = 'Blanqui';

var_dump($user, $user2);

// la fonction getFullname n'existe pas
//getFullname();

// appel de la méthode getFullname
echo $user->getFullname();
echo '<br>' . $user2->getFullname();

// Fatal error : un attribut privé n'est pas accessible depuis un objet
// instance de la classe
//echo $user->age;

echo '<br>' . $user->getInfos();

$user->civilite = 'Mr';

var_dump($user);

$i = 1;

var_dump($i); // int 1

$a = (string)$i;

var_dump($a); // string '1'

$abonne = [
    'id' => 1,
    'prenom' => 'Guillaume'
];

// stdClass est la classe de base en PHP, elle ne contient rien

$objetAbonne = (object)$abonne; // stdClass

var_dump($objetAbonne);

$newObject = new stdClass();

$newObject->id = 2;
$newObject->prenom = 'Eric';

var_dump($newObject);

$user->birthday();

echo '<br>' . $user->getInfos();
echo '<br>' . $user2->getInfos();

// firstname et lastname passés au constructeur
$user3 = new User('Groucho', 'Marx');
echo '<br>' . $user3->getInfos();

echo '<br>' . $user3;

