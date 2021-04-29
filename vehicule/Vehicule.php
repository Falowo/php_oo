<?php


/**
 * Class Vehicule
 */
abstract class Vehicule
{
    /**
     * @var string
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $vitesseMax;

    /**
     * @var int
     */
    private $vitesse = 0;

    /**
     * @var int
     */
    private $contenanceReservoir;

    /**
     * @var int
     */
    private $contenuReservoir;

    /**
     * @var array
     */
    private static $carburantsAcceptes = ['essence', 'diesel'];

    public function __construct(
        string $typeCarburant,
        int $vitesseMax,
        int $contenanceReservoir,
        int $contenuReservoir = 0
    ) {
        $this
            ->setTypeCarburant($typeCarburant)
            ->setVitesseMax($vitesseMax)
            ->setContenanceReservoir($contenanceReservoir)
            ->setContenuReservoir($contenuReservoir)
        ;
    }

    /**
     * @return string
     */
    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    /**
     * @param string $typeCarburant
     * @return Vehicule
     */
    public function setTypeCarburant(string $typeCarburant): Vehicule
    {
        if (!in_array($typeCarburant, self::$carburantsAcceptes)) {
            trigger_error('Type de carburant refusé', E_USER_ERROR);
        }

        $this->typeCarburant = $typeCarburant;

        return $this;
    }

    /**
     * @return int
     */
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    /**
     * @param int $vitesseMax
     * @return Vehicule
     */
    public function setVitesseMax(int $vitesseMax): Vehicule
    {
        $this->vitesseMax = $vitesseMax;

        return $this;
    }

    /**
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     * @return Vehicule
     */
    public function setVitesse(int $vitesse): Vehicule
    {
        if ($vitesse < 0) {
            $vitesse = 0;
        } elseif ($vitesse > $this->vitesseMax) {
            trigger_error('Ce véhicule ne peut pas aller à cette vitesse', E_USER_NOTICE);
            $vitesse = $this->vitesseMax;
        }

        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * @return int
     */
    public function getContenanceReservoir(): int
    {
        return $this->contenanceReservoir;
    }

    /**
     * @param int $contenanceReservoir
     * @return Vehicule
     */
    public function setContenanceReservoir(int $contenanceReservoir): Vehicule
    {
        $this->contenanceReservoir = $contenanceReservoir;

        return $this;
    }

    /**
     * @return int
     */
    public function getContenuReservoir(): int
    {
        return $this->contenuReservoir;
    }

    /**
     * @param int $contenuReservoir
     * @return Vehicule
     */
    public function setContenuReservoir(int $contenuReservoir): Vehicule
    {
        $this->contenuReservoir = $contenuReservoir;

        return $this;
    }

    public function accelerer(int $nbKmH)
    {
        $this->setVitesse($this->vitesse + $nbKmH);
    }

    public function fairePlein(Pompe $pompe)
    {
        if ($this->typeCarburant != $pompe->getTypeCarburant()) {
            echo 'Attention !';

            return;
        }

        // qté de carburant nécessaire pour faire le plein
        $besoinCarburant = $this->contenanceReservoir - $this->contenuReservoir;

        // cas où la pompe ne contient pas assez de carburant
        if ($besoinCarburant > $pompe->getContenu()) {
            // on redéfinit le besoin avec le contenu de la pompe
            $besoinCarburant = $pompe->getContenu();
        }

        // MAJ du contenu du reservoir du véhicule
        $this->setContenuReservoir($this->contenuReservoir + $besoinCarburant);
        // MAJ de la cuve de la pompe
        $pompe->setContenu($pompe->getContenu() - $besoinCarburant);
    }

    abstract public function getNbRoues(): int;
}
