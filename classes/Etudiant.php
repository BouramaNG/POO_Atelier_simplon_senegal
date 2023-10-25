<?php
interface Evaluer{
    public function evaluate();  
    public function travailler();
}
class Etudiant
{
    protected $nom;
    protected $prenom;
    protected $matricule;
    public $dateNaissance;

    public function __construct(string $nom, string $prenom, string $matricule, string $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->dateNaissance = $dateNaissance;
    }
    public function getNom()
    {
return $this->nom;
    }
    public function getPrenom()
    {
return $this->prenom;
    }
    public function getMatricule()
    {
return $this->matricule;
    }

    public function setNom(string $nom)
    {
        if (strlen($nom < 1 && strlen($nom) > 13)) {
            $this->nom = $nom;
        }else {
            echo "le nom doit etre superieure a 0 et max 13";
        }
       
    }
    public function setPrenom(string $prenom)
    {
        if (strlen($prenom < 1 && strlen($prenom) > 25)) {
            $this->prenom = $prenom;
        }else {
            echo "le prenom doit etre superieure a 0 et max 13";
        }
    }
    public function setMatricule(string $matricule)
    {
        if (strlen($matricule) < 1&& strlen($matricule) > 10) 
        {
                     $this->matricule = $matricule;
        }    
    
    }
    public function Presenter()
    {
        echo " Mon nom est $this->nom mon prenom est $this->prenom de matricule $this->matricule le date de naissace est $this->dateNaissance"."<br>";
    }
    public function FaireCours()
    {
        echo "je me suis inscrit en cours de magi"."<br>";
    }
    public function FaireEvaluation()
    {
        echo "letudiant peut passer des evaluation"."<br>";
    }

}
class Professeur extends Etudiant implements Evaluer
{
    private $voiture;
    private $salaire;
    private $specialite;


    public function __construct(string $nom, string $prenom,string $voiture, int $salaire, string $specialite, string $matricule,$dateNaissance)
    {
         Parent::__construct($nom,$prenom,$matricule,$dateNaissance);
         {
            $this->voiture = $voiture;
            $this->salaire = $salaire;	
            $this-> specialite =$specialite;   
         }
    }
    public function Presenter()
    {
        echo "Mon nom est $this->nom et mon prenom est $this->prenom Marque voiture $this->voiture jai une salaire de $this->salaire mon specialite est $this->specialite et mon matricule est  $this->matricule la date de naissance $this->dateNaissance"."<br>";    
    }

    public function EvaluerEtudiant()
    {
        echo "Letudiant1 est trop null en magi"."<br>";
    }
    public function evaluate()
    {

    }

    public function travailler()
    {

    }
}




?>