<?php


namespace Model;


use App\Cnx;

/**
 * Class Abonne
 * @package Model
 */
class Abonne
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Abonne
     */
    public function setId(int $id): Abonne
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     * @return Abonne
     */
    public function setPrenom(string $prenom): Abonne
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function save()
    {
        $pdo = Cnx::getInstance();
        $query = 'INSERT INTO abonne(prenom) VALUES (:prenom)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':prenom' => $this->prenom
        ]);
    }

    public function validate(array &$errors): bool
    {
        if (empty($this->prenom)) {
            $errors[] = 'Le prénom est obligatoire';
        }

        return empty($errors);
    }
    
    /**
     * return array Un tableau d'objet Abonne
     */
    public static function findAll(): array
    {
        $pdo = Cnx::getInstance();

        $stmt = $pdo->query('SELECT * FROM abonne ORDER BY id_abonne');
        $result = $stmt->fetchAll();

        $abonnes = [];

        foreach ($result as $data) {
            // instanciation d'un objet Abonne
            $abonne = new self();

            $abonne
                ->setId($data['id_abonne'])
                ->setPrenom($data['prenom'])
            ;

            $abonnes[] = $abonne;
        }

        return $abonnes;
    }
}
