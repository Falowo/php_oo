<?php
class Article
{
    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $contenu = '';

    /**
     * @var Datetime
     */
    private $datePublication;

    /**
     * @var string
     */
    private $chapo;

    /**
     * @var DateTime
     */
    private $dateModification;

    public function __construct(string $titre)
    {
        $this->setTitre($titre);
        $this->titre = $titre;
        // pour donner une valeur par défaut à un attribut
        // qui est un objet, on le fait dans le constructeur :
        $this->datePublication = new DateTime();
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return Article
     */
    public function setTitre(string $titre): Article
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * @return string
     */
    public function getContenu(): string
    {
        return $this->contenu;
    }

    /**
     * @param string $contenu
     * @return Article
     */
    public function setContenu(string $contenu): Article
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * @return Datetime
     */
    public function getDatePublication(): Datetime
    {
        return $this->datePublication;
    }

    /**
     * @param Datetime $datePublication
     * @return Article
     */
    public function setDatePublication(Datetime $datePublication): Article
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * le point d'interrogation devant le type veut dire :
     * soit ce type soit null (ici : string ou null)
     *
     * @return string|null
     */
    public function getChapo(): ?string
    {
        return $this->chapo;
    }

    /**
     * @param string|null $chapo
     * @return Article
     */
    public function setChapo(?string $chapo): Article
    {
        $this->chapo = $chapo;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDateModification(): ?DateTime
    {
        return $this->dateModification;
    }

    /**
     * @param DateTime|null $dateModification
     * @return Article
     */
    public function setDateModification(?DateTime $dateModification = null): Article
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * @param string $format Le format dans lequel on veut retourner la date
     * @return string
     */
    public function getDateModificationAsString($format = 'd/m/Y')
    {
        if (!is_null($this->dateModification)) {
            return $this->dateModification->format($format);
        }

        return '';
    }
}
