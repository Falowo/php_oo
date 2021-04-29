<?php
/*
require_once 'Database/Connexion.php';
require_once 'Webservice/Connexion.php';
require_once 'Database/Adapter/Postgresql.php';
*/
require_once 'autoload.php';

/*
 * Le nom complet de la classe Connexion dans de namespace Database
 * = nom pleinement qualifié (fully qualified name)
 */
$cnx = new Database\Connexion();
$cnx->connect();

$wsCnx = new Webservice\Connexion();
echo '<br>';
$wsCnx->connect();

$adapter = new Database\Adapter\Postgresql();
