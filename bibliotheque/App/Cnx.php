<?php
namespace App;

use PDO;

/**
 * Class Cnx
 */
class Cnx
{
    const HOST = 'localhost';
    const DBNAME = 'bibliotheque';
    const USER = 'root';
    const PASSWORD = '';

    /**
     * @var PDO
     */
    private static $instance;

    /**
     * Constructeur privé pour empêcher d'instancier la classe
     *
     * Cnx constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        if (is_null(self::$instance)) {
            self::$instance = new PDO(
                'mysql:host=' . self::HOST . ';dbname=' . self::DBNAME,
                self::USER,
                self::PASSWORD,
                [
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        }

        return self::$instance;
    }


}
