<?php


namespace Animal;

use Animal\Continent as Monde;

// use Animal\Continent\Afrique\Elephant;
/**
 * Class Fourmi
 * @package Animal
 */
class Fourmi
{
    public function voirElephantAfrique()
    {

        /*
         * Animal\Continent\Afrique\Elephant
         */
        $elephant = new Continent\Afrique\Elephant();

        echo 'Je vois un éléphant avec de '
            . $elephant->getTailleOreilles()
            . ' oreilles'
        ;
    }

    public function voirElephant(string $continent)
    {
        if ($continent == 'afrique') {
            // Animal\Continent\Afrique\Elephant
            // parce que Monde est l'alias de Animal\Continent
            $elephant = new Monde\Afrique\Elephant();
        } elseif ($continent == 'asie') {
            $elephant = new Monde\Asie\Elephant();
        }

        if (isset($elephant)) {
            echo 'Je vois un éléphant avec de '
                . $elephant->getTailleOreilles()
                . ' oreilles'
            ;
        } else {
            echo "Il n'y a pas d'éléphants où je me trouve";
        }

    }
}
