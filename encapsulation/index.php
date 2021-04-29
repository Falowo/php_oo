<?php
require_once 'Member.php';
require_once __DIR__ . '/Article.php';

$member = new Member();

// erreur, l'attribut est privé
//echo $member->firstname;

// pour accéder à la valeur de l'attribut, on utilise le getter :
echo $member->getFirstname();

// pour modifier la valeur de l'attribut, on utilise le setter :
$member->setFirstname('Bénédicte');

echo '<br>' . $member->getFirstname();

$member2 = new Member();

// on peut chaîner les appels aux setters parce qu'il retournent $this
// = setters fluides (fluent setters)
$member2
    ->setFirstname('Liam')
    ->setLastname('Tardieu')
;

var_dump($member2);

$member2->setFirstname('azertyazertyazertyazertyazertyazertyazerty');

var_dump($member2->getFirstname());

$article = new Article('La fin du monde');

// fatal error : le type du paramètre attendu par le setter est string
//$article->setTitre(['titre' => 'Mon titre']);

// dans ce cas la valeur est transformée en string
$article->setTitre(1984);

var_dump($article->getTitre()); // string '1984'

var_dump($article->getDatePublication());

// appel de la méthode format() sur l'objet DateTime contenu dans l'attribut datePublication
echo $article->getDatePublication()->format('d/m/Y');

var_dump($article->getChapo()); //null

$article->setChapo('Mon chapo');

var_dump($article->getChapo()); // Mon chapo

$article->setChapo(null);

var_dump($article->getChapo()); //null

var_dump($article->getDateModification()); //null

// ni DateTime ni null : erreur
//$article->setDateModification('2020-01-01');

$article->setDateModification(new DateTime('+1day'));

var_dump($article->getDateModification()); // la date de demain

var_dump($article->getDateModificationAsString()); // string '25/01/2020'

var_dump($article->getDateModificationAsString('Y-m-d')); // string '2020-01-25'

$article->setDateModification();

var_dump($article->getDateModification()); //null

// erreur : $article->getDateModification() retourne null
//echo $article->getDateModification()->format('d/m/Y');

var_dump($article->getDateModificationAsString()); // string ''
