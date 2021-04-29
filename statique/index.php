<?php
require_once 'Commande.php';

// constante dans le scope global
define('MA_CONSTANTE', 'Je ne bouge pas');
echo MA_CONSTANTE;

echo '<br>';

// '::' : opérateur de résolution de portée
// pour accéder à la constante définie dans la classe commande :
echo Commande::FRAIS_PORT;

echo '<br>';

// pour accéder à un attribut statique :
echo Commande::$defaultStatus;

// Erreur : l'attribut prix n'est pas statique
//echo Commande::$prix;
echo '<br>';
$commande1 = new Commande();
echo $commande1->prix;
echo '<br>';

$commande2 = new Commande();
$commande2->prix = 200;

$commande3 = new Commande();

// Erreur : l'attribut statique $nbCommande est déclaré privé
//echo Commande::$nbCommande;

echo '<br>';

echo Commande::getNbCommande();

// Erreur parce qu'afficherPrix() ne peut pas utiliser $this :
//Commande::afficherPrix();

echo '<br>';
$commande2->afficherInfos();

// la méthode statique createFromFormat() de la classe DateTime
// permet de créer un objet DateTime en choisissant le format de date qu'on lui passe :
$jour = DateTime::createFromFormat('d/m/Y', '02/05/1993');
var_dump($jour);
echo $jour->format('j M y');

// erreur entre année et mois :
$jour2 = new DateTime('02/05/1993'); // crée la date de 1993-02-05
var_dump($jour2);

echo $jour2->format('j M y');

$jour2Correct = new DateTime('1993-05-02');
var_dump($jour2Correct);


$jour3 = DateTime::createFromFormat('j M y', '2 May 93');
var_dump($jour3);

