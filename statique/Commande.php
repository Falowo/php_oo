<?php
class Commande
{
    /**
     * constante de classe
     */
    const FRAIS_PORT = 10;

    public $prix = 100;

    public static $defaultStatus = 'en cours';

    private static $nbCommande = 0;

    public function __construct()
    {
        // Commande::$nbCommande++;
        // self fait référence à la classe
        self::$nbCommande++;

        echo self::$nbCommande . '<br>';
    }

    /**
     * @return int
     */
    public static function getNbCommande(): int
    {
        return self::$nbCommande;
    }

    public static function afficherPrix()
    {
        // $this n'est pas utilisable dans une méthode statique
        // car $this fait référence à un objet qui appelle la méthode
        echo $this->prix;
    }

    public function afficherInfos()
    {
        echo 'Commande de ' . $this->prix . '€'
            . ' plus ' . self::FRAIS_PORT . '€ de frais de port'
            . ' dont le statut est ' . self::$defaultStatus
            . ' parmi ' . self::$nbCommande . ' commandes'
        ;
    }
}
