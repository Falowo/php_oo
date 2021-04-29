<?php
require_once 'autoload.php';

$a = false;

try {
    if (!$a) {
        throw new Exception('ça ne marche pas si $a est faux');
    }

    echo "Le code après ne s'exécute pas";
} catch (Exception $e) {
    echo $e->getMessage();
}

echo '<br>';

// une exception jetée et non gérée par un bloc try ... catch génère une fatal error
//throw new Exception('Une erreur qui arrive toujours');
try {
    $member = new Member();
    $member->setFirstname('azertyazertyazertyazertyazertyazertyazerty');
} catch (Exception $e) {
    echo $e->getMessage();
}

$liste = [
    'René',
    'Jean-Edern',
    'Charles-Henri',
    'Jean-Thierry-Marcel-Benoît-Gerrard',
    'Ben',
    'Thomas'
];

try {
    foreach ($liste as $prenom) {
        $member = new Member();
        $member->setFirstname($prenom);
        file_put_contents('membres.txt', $member->getFirstname() . PHP_EOL, FILE_APPEND);
    }
} catch (Exception $e) {
    // suppression du fichier
    unlink('membres.txt');
    // journalisation de l'erreur dans le fichier de log
    Logger::log($e);
}

try {
    $member = new Member();
    $member
        ->setFirstname('Louis')
        ->setLastname('16')
    ;
} catch (InvalidArgumentException $e) {
    Logger::log($e);
}

echo '<br>';

try {
    $member = new Member();
    $member
        ->setFirstname('Louis')
        ->setLastname('16')
    ;
} catch (InvalidArgumentException $e) {
    echo 'InvalidArgumentException jetée';
    Logger::log($e);
} catch (Exception $e) {
    echo 'Exception jetée';
    Logger::log($e);
}
echo '<br>';

try {
    $member = new Member();
    $member
        ->setFirstname('LouisLouisLouisLouisLouisLouisLouisLouisLouis')
        ->setLastname('16')
    ;
} catch (InvalidArgumentException $e) {
    echo 'InvalidArgumentException jetée';
    Logger::log($e);
} catch (Exception $e) {
    echo 'Exception jetée';
    Logger::log($e);
}

echo '<br>';

try {
    $member = new Member();
    $member
        ->setCivility('Mademoiselle')
        ->setLastname('Moreau')
        ->setFirstname('Jeanne')
    ;
} catch (Exception $e) {
    echo get_class($e); // UnexpectedValueException
    Logger::log($e);
}

try {
    $member = new Member();
    $member->setFirstname(['Marius']);
} catch (Error $e) { // Pour attrapées les erreurs lancées par PHP
    var_dump($e);
}

/* une parse error ne paut pas être attrapée
$member = new Member()
$member->setFirstname('Marius');
*/

// Les classes Exception et Error implémentent l'interface Throwable :

try {
    $member = new Member();
    $member->setFirstname('azertyazertyazertyazertyazertyazertyazerty');
} catch (Throwable $e) {
    Logger::log($e);
}

try {
    $member = new Member();
    $member->setFirstname(['Marius']);
} catch (Throwable $e) {
    Logger::log($e);
}
