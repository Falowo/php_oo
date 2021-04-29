<?php
require_once 'Chien.php';

class MaitreChien
{
    /**
     * @var Chien
     */
    private $chien;

    /**
     * @var Chien
     */
    private $chien2;

    /**
     * @return Chien
     */
    public function getChien(): Chien
    {
        return $this->chien;
    }

    /**
     * @param Chien $chien
     * @return MaitreChien
     */
    public function setChien(Chien $chien): MaitreChien
    {
        $this->chien = $chien;

        return $this;
    }

    /**
     * @return Chien
     */
    public function getChien2(): Chien
    {
        return $this->chien2;
    }

    /**
     * @param Chien $chien2
     * @return MaitreChien
     */
    public function setChien2(Chien $chien2): MaitreChien
    {
        $this->chien2 = $chien2;

        return $this;
    }

    public function carresserChien()
    {
        // si l'attribut $chien a été setté :
        if (!is_null($this->chien)) {
        // équivaut à : if ($this->chien instanceof Chien) {

            $this->chien->crier();
        } else {
            echo "Je n'ai pas encore de chien";
        }
    }

    public function donnerSucre(int $numeroChien)
    {
        if (!in_array($numeroChien, [1, 2])) {
            echo 'Je ne connais pas ce chien';

            return;
        }

        if ($numeroChien == 1) {
            $chien = $this->chien;
        } else {
            // $this->chien2
            $chien = $this->{'chien' . $numeroChien};
        }

        // si l'attribut a été setté
        if (!is_null($chien)) {
            echo 'Je suis ' . $chien->getNom() . ' et je dis ';
            $chien->crier();
        }

    }
}
