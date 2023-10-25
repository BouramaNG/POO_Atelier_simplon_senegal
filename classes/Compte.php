<?php

class Compte
{
    /**
     * Variable pour titulaire
     *
     * @var [string]
     */
    public $titulaire;
    /**
     * Variable pour solde
     *
     * @var [float]
     */
    public $solde;
    public function __construct(string $nom, float $montant = 100)
{
        $this->titulaire = $nom;
        $this->solde = $montant;

 }
 //je vais cree un fonction qui permet de deposer de largent
 public function deposer(float $montant)
 {
    if ($montant >0) {
        $this->solde += $montant;
        }else {
            echo "la somme ne peut pas etre negatif";
        }
 }

 //je vais cree  une fonction pour retirer de largent dans le compte
 public function retirer(float $montant)
 {
   if ($montant > 0 && $montant <= $this->solde) {
    $this->solde -= $montant;
   }else {
    echo "le montant ne doit pas etre superieur a la solde du montant";
   }
 }
}





?>