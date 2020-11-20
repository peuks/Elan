<?php
class Genre
{
  private $genre, $film;

  public function __construct(string $genre = "")
  {
    $this->genre = $genre;
    $this->genre = [];
  }

  public function getGenre()
  {
    foreach ($this->genre as $i => $movie) {
    }
  }
} ?>

<!-- Lister tous les films du genre ? -->
<!-- Ajouter des films -->