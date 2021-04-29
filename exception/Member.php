<?php


/**
 * Class Member
 */
class Member
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $civility;

    /**
     * @var array
     */
    private static $civilityAccepted = ['Monsieur', 'Madame'];

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Member
     * @throws Exception
     */
    public function setFirstname(string $firstname): Member
    {
        if (mb_strlen($firstname) > 20) {
            throw new Exception('Le prénom "' . $firstname . '" est trop long');
        }

        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Member
     */
    public function setLastname(string $lastname): Member
    {
        // si c'est un nombre
        if (ctype_digit($lastname)) {
            throw new InvalidArgumentException("Un nom ne peut pas être un nombre");
        }

        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getCivility(): string
    {
        return $this->civility;
    }

    /**
     * @param string $civility
     * @return Member
     */
    public function setCivility(string $civility): Member
    {
        if (!in_array($civility, self::$civilityAccepted)) {
            throw new UnexpectedValueException(
                'Seules les civilités ' . implode(', ', self::$civilityAccepted) . ' sont acceptées'
            );
        }

        $this->civility = $civility;

        return $this;
    }


}
