<?php

class Employe
{
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct(string $nom ,string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;    
        $this->age = $age;  

    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function Presentation()
    {
        echo " mon nom est $this->nom, mon prenom est $this->prenom , et jai $this->age ans";
    }
}
class Chauffeur extends Employe
{
    
    public $voiture;
    public function __construct(string $nom, string $prenom, int $age, string $voiture)
    {
       Parent::__construct($nom,$prenom,$age) ;
       $this->voiture = $voiture;
    }  

    public function Presentation()
    {
        echo " mon nom est {$this->nom}, mon prenom est {$this->prenom }, et jai {$this->age} ans";
    }
    public function rouler()
    {
        echo "je conduit un ranger";
        }
}





?>