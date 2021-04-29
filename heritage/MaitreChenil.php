<?php


/**
 * Class MaitreChenil
 */
class MaitreChenil
{
    /**
     * @var array
     */
    private $chiens = [];

    /**
     * @return array
     */
    public function getChiens(): array
    {
        return $this->chiens;
    }

    /**
     * @param array $chiens
     * @return MaitreChenil
     */
    public function setChiens(array $chiens): MaitreChenil
    {
        $this->chiens = $chiens;

        return $this;
    }

    /**
     * @param Chien $chien
     * @return MaitreChenil
     */
    public function addChien(Chien $chien): MaitreChenil
    {
        $this->chiens[] = $chien;

        return $this;
    }

    public function donnerSucre(int $numeroChien)
    {
        $chien = $this->chiens[$numeroChien] ?? null;
        // $chien = isset($this->chiens[$numeroChien]) ? $this->chiens[$numeroChien] : null;

        if (!is_null($chien)) {
            echo 'Je suis ' . $chien->getNom() . ' et je dis ';
            $chien->crier();
        } else {
            echo 'Je ne connais pas ce chien';
        }
    }
}
