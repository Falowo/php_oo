<?php
/*
require_once 'Animal.php';
require_once 'Chien.php';
require_once 'Chat.php';
require_once 'Humain.php';
require_once 'MaitreChien.php';
require_once 'MaitreChenil.php';
require_once 'Maitre.php';
require_once 'Siamois.php';
//require_once 'SiamoisAngora.php';
*/
require_once 'autoload.php';

// la classe Animal ne peut pas être instanciée car déclarée abstraite
//$animal = new Animal();
//echo $animal->identifier();

$chien = new Chien();

// on peut appeler la méthode identifier() définie dans Animal
// depuis une instance de Chien car Chien hérite d'Animal
echo '<br>' . $chien->identifier();

$chat = new Chat();

echo '<br>' . $chat->identifier();

echo '<br>';
$chien->crier();
echo '<br>';
$chat->crier();

$humain = new Humain();

echo '<br>';
$humain->carresser($chien);

echo '<br>';
$humain->carresser($chat);

// instanceof est un opérateur de comparaison
// qui permmet de savoir si une variable contient
// un objet instance d'une classe donnée
var_dump($chien instanceof Chien); // true
// un objet instance de Chien est aussi instance d'Animal
// parce que la classe Chien hérite d'Animal
var_dump($chien instanceof Animal); // true

$milou = new Chien();
$milou->setNom('Milou');
$tintin = new MaitreChien();
$tintin->setChien($milou);
// on peut faire aboyer milou comme ça :
$tintin->getChien()->crier();

$rintintin = new Chien();
$rintintin->setNom('Rintintin');

$tintin->setChien2($rintintin);

echo '<br>';

$tintin->donnerSucre(1);

echo '<br>';

$tintin->donnerSucre(2);

echo '<br>';

$tintin->donnerSucre(3);

echo '<br>';

// variable dynamique :
$a1 = 1;
$a2 = 2;

$numero = 2;

// $a2
echo ${'a' . $numero};

$jeanEdern = new MaitreChenil();

$jeanEdern
    ->addChien($milou)
    ->addChien($rintintin)
;

echo '<br>';

$jeanEdern->donnerSucre(0);

echo '<br>';

$jeanEdern->donnerSucre(1);

echo '<br>';

$jeanEdern->donnerSucre(2);

$boule = new Maitre();
$bill = new Chien();
$boule->setAnimal($bill);

$jon = new Maitre();
$garfield = new Chat();
$jon->setAnimal($garfield);

echo '<br>';
$boule->carresserAnimal();
echo '<br>';
$jon->carresserAnimal();

echo '<br>';
// méthode identifier définie dans Animal
echo $boule->getAnimal()->identifier();
echo '<br>';
// méthode identifier surchargée dans Chat
echo $jon->getAnimal()->identifier();

$siamois = new Siamois();
var_dump($siamois instanceof Siamois); // true
// par héritage :
var_dump($siamois instanceof Chat); // true
// parce que chat hérite d'Animal :
var_dump($siamois instanceof Animal); // true

echo '<br>';
$garfield->ronronner();
echo '<br>';
$siamois->ronronner();

// l'attribut regne est privé donc inaccessible depuis un objet
//echo $garfield->regne;
// l'attribut classe est protégé donc inaccessible depuis un objet
//echo $bill->classe;

$bill->afficherRegne();
$bill->afficherClasse();
