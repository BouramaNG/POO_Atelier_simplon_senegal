<?php

interface IPresentation {
    public function sePresenter();
}

class Etudiant{
    protected $nom;
    protected $prenom;
    protected $matricule;
    public $dateNaissance;
    protected $prochaineEvaluation;

    public function __construct($nom, $prenom, $matricule, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->dateNaissance = $dateNaissance;
    }

    public function Presenter() {
        echo "Bonjour, je suis étudiant.e, je m'appelle $this->prenom $this->nom, je suis né.e le $this->dateNaissance, mon matricule est : $this->matricule.";
    }

    public function faireEvaluation($date) {
        $this->prochaineEvaluation = $date;
        echo "Je dois faire une évaluation le $date.\n"."<br>";
    }
  
    public function getDateNaissance() {
        return $this->dateNaissance;
    }
    
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }
    public function setNom(string $nom) {
      if (strlen($nom < 0) && strlen($nom) > 13) {
        $this->nom = $nom;
      }else {
        throw new Exception("le nom doit etre compris entre 1 caractere et 13");
        
      }
    }

    public function setPreom(string $prenom) {
        if (strlen($prenom < 0) && strlen($prenom) > 25) {
          $this->prenom = $prenom;
        }else {
          throw new Exception("le prenom doit etre compris entre 1 caractere et 13");
          
        }
      }
}


class Professeur extends Etudiant implements IPresentation {

    private $salaire;
    private $aVoiture;

    public function __construct($nom,$prenom,$matricule,$salaire,$aVoiture,$dateNaissance) {
        Parent::__construct($nom,$prenom,$matricule,$dateNaissance);
        $this->salaire = $salaire;
        $this->aVoiture = $aVoiture;
    }

    public function Presenter() {
        $specialite = "spécialisé dans le domaine de l'informatique et de la programmation"."<br>";
        $voiture = $this->aVoiture ? "j'ai une voiture" : "je n'ai pas de voiture"."<br>";
        echo "Salut, je suis professeur, je m'appelle $this->prenom $this->nom, $specialite, $voiture, j'ai comme salaire $this->salaire FCFA.\n"."<br>";
    }

    public function evaluerEtudiant(Etudiant $etudiant, $date) {
  
            echo "Le professeur $this->prenom $this->nom évalue l'étudiant.e {$etudiant->prenom} {$etudiant->nom} le $date.\n"."<br>";
        }

public function sePresenter()
{

}

    public function getSalaire() {
        return $this->salaire;
    }
  
    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }
    
    public function aVoiture() {
        return $this->aVoiture;
    }
    
    public function setVoiture($aVoiture) {
        $this->aVoiture = $aVoiture;
    }
}

 
$etudiant = new Etudiant("Bourama", "Ngom", "01233", "09/02/1900");
$etudiant->Presenter();
$etudiant->faireEvaluation("30/10/2023");

$professeur = new Professeur("Samba", "KANE", "Prof123", 3000, "Jai un viture","Magi noir");
$professeur->Presenter();

$autreEtudiant = new Etudiant("Cours Magie", "Bourama Ngom", "56789", "01/01/2000");
$professeur->evaluerEtudiant($autreEtudiant, "01/11/2023");






