<?php

namespace Model\Entity;

use App\AbstractEntity;

class Salarie extends AbstractEntity {

    private $id;
    private $nom;
    private $prenom;
    private $ville;
    private $dateNaissance;
    private $dateEntree;
    private $entreprise;

    public function __construct($data){
        parent::hydrate($data, $this);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }

    public function getVille(){
        return $this->ville;
    }

    public function setVille($ville){
        $this->ville = $ville;
        return $this;
    }

    public function getDateNaissance(){
        return $this->dateNaissance->format("d-m-Y");
    }

    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = new \DateTime($dateNaissance);
        return $this;
    }

    public function getDateEntree(){
        return $this->dateEntree->format("d-m-Y");
    }

    public function setDateEntree($dateEntree){
        $this->dateEntree = new \DateTime($dateEntree);
        return $this;
    }

    public function getEntreprise(){
        return $this->entreprise;
    }

    public function setEntreprise($entreprise){
        $this->entreprise = $entreprise;
        return $this;
    }

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }
}