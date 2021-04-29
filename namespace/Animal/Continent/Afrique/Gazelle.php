<?php


namespace Animal\Continent\Afrique;

// use Touriste;

/**
 * Class Gazelle
 * @package Animal\Continent\Afrique
 */
class Gazelle
{
    public function voirElephant()
    {
        /*
         * Animal\Continent\Afrique\Elephant
         * car sans utiliser le nom complet de la classe
         * et sans use, la classe est celle qui se trouve
         * dans le namespace dans lequel on est
         */
        $elephant = new Elephant();

        echo 'Je vois un éléphant avec de '
            . $elephant->getTailleOreilles()
            . ' oreilles'
        ;
    }

    public function etreVu()
    {
        /*
         * l'antislash initial fait revenir à la racine des namespace
         * Sans cet antislash, la classe attendue serait Animal\Continent\Afrique\Touriste
         *
         * L'alternative est d'ajouter un "use Touriste;" dans le fichier
         */
        $touriste = new \Touriste();

        $touriste->voirGazelle();
    }
}
