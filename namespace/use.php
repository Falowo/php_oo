<?php
/*
 * le use permet d'utiliser la classe par son nom court
 * (sans le namespace) dans le reste du fichier
 */

use Database\Adapter\Postgresql;
use Database\Connexion;
/**
 * comme on utilise 2 classes dont le nom court est Connexion
 * on en aliasse l'une des 2
 */
use Webservice\Connexion as WSConnexion;
/*
require_once 'Database/Connexion.php';
require_once 'Webservice/Connexion.php';
require_once 'Database/Adapter/Postgresql.php';
*/
require_once 'autoload.php';

$cnx = new Connexion();
$cnx->connect();

$wsCnx = new WSConnexion();

$adapter = new Postgresql();

echo '<br>';

echo Postgresql::class;
