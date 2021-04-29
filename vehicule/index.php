<?php
/*
Créer une classe abstraite Vehicule et
2 classes qui en héritent : Moto et Voiture
qui vont contenir des méthodes pour retourner :
- le nombre de roues (lié au type de véhicule)
- le type de carburant (essence ou diesel)
- une vitesse maximale
Ajouter un construteur (__construct)
Instancier un véhicule de chaque type

Bonus:
Ajouter une vitesse avec getter et setter (pas moins de 0, pas plus de vitesse max)
et une méthode accelerer() qui prend en paramètre de combien de km/h
*/
require_once 'Voiture.php';
require_once 'Moto.php';
require_once 'Pompe.php';

$voiture = new Voiture('diesel', 180, 80, 50);

$moto = new Moto('essence', 210, 30, 10);

var_dump($voiture, $moto);

echo $voiture->getNbRoues();

//$voitureAEau = new Voiture('eau', 350);

$voiture->setVitesse(200); // notice

echo '<br>' . $voiture->getVitesse(); // 0

$voiture->setVitesse(50);

$voiture->accelerer(40);

echo '<br>' . $voiture->getVitesse(); // 90

$voiture->accelerer(100); // notice

echo '<br>' . $voiture->getVitesse(); // 90
/*
Ajouter 2 attributs contenanceReservoir et contenuReservoir

Créer une classe Pompe (à essence) avec 3 attributs :
typeCarburant, contenance & contenu (de la cuve)

Dans Vehicule, ajouter une méthode fairePlein() qui prend une Pompe
en paramètre, qui remplit le réservoir du Vehicule et enlève autant
d'essence à la pompe

Bonus:
- jeter une alerte si on ne va pas à une pompe du même type de carburant
que le véhicule
- gérer le cas où la pompe ne contient pas assez d'essence
 pour faire le plein (dans ce cas, vider la pompe)
*/
$pompeDiesel = new Pompe('diesel', 1000, 600);
$pompeEssence = new Pompe('essence', 1200, 800);

echo '<br>avant plein :';
var_dump($voiture, $pompeDiesel);

$voiture->fairePlein($pompeDiesel);

echo 'après plein :';
var_dump($voiture, $pompeDiesel);

echo '<br>avant plein :';
var_dump($moto, $pompeDiesel);

$moto->fairePlein($pompeDiesel);

echo 'après plein :';
var_dump($moto, $pompeDiesel);

$grosseVoiture = new Voiture('essence', 220, 100, 10);
$petitePompe = new Pompe('essence', 300, 50);

echo '<br>avant plein :';
var_dump($grosseVoiture, $petitePompe);

$grosseVoiture->fairePlein($petitePompe);

echo 'après plein :';
var_dump($grosseVoiture, $petitePompe);
