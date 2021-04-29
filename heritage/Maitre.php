<?php
require_once 'Animal.php';

/**
 * Class Maitre
 */
class Maitre
{
    /**
     * @var Animal
     */
    private $animal;

    /**
     * @return Animal
     */
    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    /**
     * @param Animal $animal
     * @return Maitre
     */
    public function setAnimal(Animal $animal): Maitre
    {
        $this->animal = $animal;

        return $this;
    }

    public function carresserAnimal()
    {
        if (!is_null($this->animal)) {
            $this->animal->crier();
        } else {
            echo "Je n'ai pas d'animal";
        }
    }
}
