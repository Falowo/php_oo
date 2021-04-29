<?php
require_once 'Volume.php';
require_once 'Texture.php';

/**
 * Class Brique
 *
 * Une classe peut implémenter plusieurs interface
 */
class Brique implements Volume, Texture
{

    /**
     * @inheritDoc
     */
    public function getMatiere(): string
    {
        return 'terre';
    }

    /**
     * @inheritDoc
     */
    public function getCouleur(): string
    {
        return 'rouge';
    }

    /**
     * @inheritDoc
     */
    public function getForme(): string
    {
        return 'parallélépipède rectangle';
    }
}
