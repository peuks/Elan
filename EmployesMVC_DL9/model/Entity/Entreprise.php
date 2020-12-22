<?php

namespace Model\Entity;

use App\AbstractEntity;

class Entreprise extends AbstractEntity {

    private $id;
    private $raisonSociale;
    private $siret;
    private $adresse;
    private $cp;
    private $ville;

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

    public function getRaisonSociale(){
        return $this->raisonSociale;
    }

    public function setRaisonSociale($raisonSociale){
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    public function getSiret(){
        return $this->siret;
    }

    public function setSiret($siret){
        $this->siret = $siret;
        return $this;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function setAdresse($adresse){
        $this->adresse = $adresse;
        return $this;
    }

    public function getCp(){
        return $this->cp;
    }

    public function setCp($cp){
        $this->cp = $cp;
        return $this;
    }

    public function getVille(){
        return $this->ville;
    }

    public function setVille($ville){
        $this->ville = $ville;
        return $this;
    }

    public function __toString(){
        return $this->raisonSociale;
    }
}