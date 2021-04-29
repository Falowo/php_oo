<?php
require_once 'autoload.php';

use Animal\Continent\Afrique\Elephant as ElephantAfrique;
use Animal\Continent\Afrique\Gazelle;
use Animal\Continent\Asie\Elephant as ElephantAsie;
use Animal\Fourmi;

// instanciation de Animal\Continent\Afrique\Elephant
$elephantAfrique = new ElephantAfrique();
// instanciation de Animal\Continent\Asie\Elephant
$elephantAsie = new ElephantAsie();

echo $elephantAfrique->getTailleOreilles(); // grandes
echo '<br>';
echo $elephantAsie->getTailleOreilles(); // petites

$gazelle = new Gazelle();
echo '<br>';
$gazelle->voirElephant();
echo '<br>';
$gazelle->etreVu();

$fourmi = new Fourmi();
echo '<br>';
$fourmi->voirElephantAfrique();
echo '<br>';
$fourmi->voirElephant('afrique');
echo '<br>';
$fourmi->voirElephant('asie');
echo '<br>';
$fourmi->voirElephant('europe');
