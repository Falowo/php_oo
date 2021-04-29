<?php


/**
 * Class User
 */
class User
{
    // use dans la classe permet d'intégrer un ou plusieurs Traits
    // Permet d'intégrer à la classe les méthode de Displayer
    use Displayer;

    public function __construct(string $username)
    {
        $this->setUsername($username);
    }

    /**
     * @var string
     */
    private $username;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;

        return $this;
    }

    public function displayUsername(string $color = 'black', bool $loud = false)
    {
        $name = $loud ? $this->asCapital($this->username) : $this->username;

        $this->asParagraph($name, $color);
    }
}
