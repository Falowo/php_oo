<?php
require_once 'Animal.php';

class Chat extends Animal
{
    /**
     * Surcharge (=redéfinition) de la méthode identifier()
     * de la classe mère Animal
     */
    public function identifier(): string
    {
        // parent fait référence à la classe mère Animal.
        // on utilise toujours :: avec parent
        return parent::identifier() . ' et je suis un chat';
    }

    public function crier(bool $loud = false): void
    {
        echo 'Miaou';
    }

    // une méthode finale ne peut pas être surchargée
    final public function ronronner()
    {
        echo 'Ronron';
    }
}
