<?php
// require_once'classes/Compte.php';
// require_once 'classes/Employe.php';
require_once'classes/Etudiant.php';

$etudiant1 = new Etudiant("Ngom","Bourama","MT502","15/02/1900");

$etudiant1->Presenter();
$etudiant1->FaireCours();
$etudiant1->FaireEvaluation();

$etudiant2 = new Etudiant("Ngom","Naruto","MT602","15/02/2001");
$etudiant2->Presenter();
$etudiant2->FaireCours();
$etudiant2->FaireEvaluation();

$professeur1 = new Professeur("Talla","Saliou","Oui",3000000,"Magie Noir","MT801","15/02/2022");
$professeur1->Presenter();  
$professeur1->EvaluerEtudiant();    

// var_dump($etudiant1);
// $compte1 = new Compte('Bourama',500);
// // $compte1->titulaire = 'Bourama';
// // $compte1->solde = 500;
// // $compte1->deposer(100);

// $compte1->retirer(100);
// var_dump($compte1); 

// $compte2 = new Compte('Baye Niass',600);
// // $compte2->titulaire = 'Baye Niass';
// // $compte2->solde = 600;
// // $compte2->deposer(200);
// $compte2->retirer(800);
// var_dump($compte2);

// $employe1 = new Employe('Bourama','Ngom',30);
// $employe1->setAge(40);
// var_dump($employe1);
// $employe1->Presentation();
// // $employe2 = new Employe('Boura','Ngome',30);
// // var_dump($employe2);
// // $employe2->Presentation();
// $chauffeur =  new Chauffeur('Bourama','Ngom',30,'ranger');
// $chauffeur->Presentation();



?>