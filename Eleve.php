<?php
Class Eleve{
    private $nom;
    private $prenom;

    public function __construct($paramNom, $paramPrenom)
    {
        $this->nom = $paramNom ;
        $this->prenom = $paramPrenom ;
    }
    public function Travaille()
    {
        return "Lélève $this->nom $this->prenom travaille comme il faut \n";
    }
}

$mrRobert = new Eleve("Robert", "Thimotée");
$mdGougeon = new Eleve("Gougeon", "Sterenn");
echo $mdGougeon->travaille();
echo $mrRobert->travaille();