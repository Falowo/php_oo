<?php
require_once 'Chat.php';

/**
 * Une classe déclarée finale est une classe
 * dont il est impossible d'hériter
 */
final class Siamois extends Chat
{
    /*
    Fatal error:
    la méthode ronronner est déclarée finale dans Chat

    public function ronronner()
    {
        // TODO revenir sur cette méthode
        // @todo vraiment revenir !

        // FIXME j'ai fait du code pourri

        echo 'Ronronron';
    }
    */
}
