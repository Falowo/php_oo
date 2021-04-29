<?php
/*
 * Une classe abstraite ne peut pas être instanciée,
 * elle ne sert que dans le cadre de l'héritage
 */
abstract class Animal
{
    private $regne = 'animal';

    protected $classe = 'mammifère';

    public function identifier(): string
    {
        return 'Je suis un animal';
    }

    /*
     * Méthode abstraite
     *
     * Toutes les classes qui héritent d'Animal doivent
     * implémenter (=définir concrètement) cette méthode
     *
     * Une méthode abstraite ne peut être définie que dans une classe abstraite
     *
     */
    abstract public function crier(bool $loud = false): void;
}
