<?php
require_once 'Animal.php';

// la classe Chien hérite de la classe Animal
class Chien extends Animal
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Chien
     */
    public function setNom(string $nom): Chien
    {
        $this->nom = $nom;

        return $this;
    }



    public function crier(bool $loud = false): void
    {
        $cri = 'Ouaf';

        if ($loud) {
            echo strtoupper($cri);
        } else {
            echo $cri;
        }
    }

    public function afficherRegne()
    {
        // inaccessible car déclaré privé dans Animal
        echo $this->regne;
    }

    public function afficherClasse()
    {
        // accessible car déclaré protégé dans Animal
        echo $this->classe;
    }
}
