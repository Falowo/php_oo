<?php
class Member
{
    private $firstname = 'Ben';

    private $lastname;

    /**
     * Getter de l'attribut firstname :
     * retourne la valeur de l'attribut
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Setter de l'attribut :
     * permet de modifier sa valeur
     */
    public function setFirstname($value)
    {
        if (mb_strlen($value) > 30) {
            trigger_error("D'où sort ce prénom ?", E_USER_WARNING);
        } else {
            $this->firstname = $value;
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return Member
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }


}
