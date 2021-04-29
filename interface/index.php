<?php
require_once 'Volume.php';
require_once 'Cube.php';
require_once 'Sphere.php';
require_once 'Texture.php';
require_once 'Brique.php';
require_once 'De.php';

// on peut typer un paramètre de fonction ou de méthode
// sur le nom d'une interface
function afficherFormeVolume(Volume $volume)
{
    echo 'La forme du volume est : ' . $volume->getForme();
}

function afficherCouleurTexture(Texture $texture)
{
    echo 'La couleur de la texture est : ' . $texture->getCouleur();
}

$cube = new Cube();
$sphere = new Sphere();

var_dump($cube instanceof Volume); // true

afficherFormeVolume($cube);
echo '<br>';
afficherFormeVolume($sphere);

$brique = new Brique();

echo '<br>';
afficherFormeVolume($brique);
echo '<br>';
afficherCouleurTexture($brique);

$de = new De('plastique', 'rouge');

var_dump($de instanceof De); // true
// parce que De hérite de Cube :
var_dump($de instanceof Cube); // true
// parce que De implémente Texture :
var_dump($de instanceof Texture); // true
// parce que De hérite de Cube qui implémente Volume :
var_dump($de instanceof Volume); // true

echo '<br>';
afficherFormeVolume($de);
echo '<br>';
afficherCouleurTexture($de);
