<?php


/**
 * Class Humain
 */
class Humain
{
    public function donnerSucre(Chien $chien)
    {
        // La méthode crier existe dans Chien
        $chien->crier();
    }

    public function carresser(Animal $animal)
    {
        $animal->crier();
    }
}
