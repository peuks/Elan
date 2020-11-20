<?php

class Film
{
  private $titre;
  private $dateDeSortie;
  private $realisateur;
  private $acteur;
  private $resume;

  public function __construct(
    string $titre = "",
    string $dateDeSortie = "now",
    string $realisateur = "", //Doit être une instance de Realisateur
    string $resume = ""
  ) {
    $this->titre = $titre;
    $this->dateDeSortie = new DateTime($dateNaissance);
    $this->realisateur = $realisateur;
    $this->acteur = $acteur; // Doit être une instance de Acteur
    $this->resume = $resume;
  }

  public function getTitre()
  {
    return $this->titre;
  }
  public function getDateDeSortie()
  {
    return $this->dateDeSortie;
  }
  public function getRealisateur()
  {
    return $this->realisateur;
  }
  public function getActeur()
  {
    return $this->acteur;
  }
  public function getResume()
  {
    return $this->resume;
  }

  public function __toString()
  {
    return $this->titre . " du réalisateur " . $this->realisateur;
  }
}
