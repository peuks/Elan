<?php

class Author
{
  private $name, $firstName, $bookArray;

  public function __construct(
    string $firstName = "Prénom inconnu",
    $name = "Nom inconnu"
  ) {
    $this->firstName = $name;
    $this->lastName = $firstName;
    $this->booksArray = [];
  }

  // Getter
  public function getFirstName()
  {
    return $this->firstName;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  // Setter
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
    return $this;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
    return $this->lastName;
  }

  // Get Author
  public function getAuthor()
  {
    return $this->getFirstName() . " " . $this->getLastName();
  }

  // Get books
  public function getBooks()
  {
    if (count($this->booksArray) == 0) {
      return count($this->booksArray);
    } else {
      foreach ($this->booksArray as $book) {
        echo $book->getTitle();
      }
    }
  }

  // Add Book

  public function addBook(Book $book)
  {
    array_push($this->booksArray, $book);
    // Define author in book
  }

  public function __toString()
  {
    return "This author is " . $this->getAuthor();
  }
}

// Books
class Book
{
  private $title, $author, $dateOfPublication, $price;

  public function __construct(
    string $title = "N/A",
    Author $author = null,
    int $dateOfPublication = 0,
    int $price = 0
  ) {
    $this->title = $title;
    $this->dateOfPublication = $dateOfPublication;
    $this->price = $price;
    $this->author = $author;
    $this->author->addBook($this);
  }
  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle(string $title)
  {
    $this->title = $title;
    return $this;
  }

  public function getAuthor()
  {
    if ($this->author == null) {
      return "Nothing";
    }
    return $this->author->getAuthor();
  }

  public function setAuthor(Author $author)
  {
    $this->author = $author;
    // Ajouter le livre à la bibliographique de l'auteur
    if ($author == null) {
      $author->addBook($this);
    }
    return $this;
  }

  public function getDateOfPublication()
  {
    return $this->dateOfPublication;
  }

  public function setDateOfPublication(int $dateOfPublication)
  {
    $this->dateOfPublication = $dateOfPublication;
    return $this;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice(int $price)
  {
    $this->price = $price;
    return $this;
  }

  public function __toString()
  {
    return "L'auteur est  " .
      $this->getAuthor() .
      "<br/>" .
      " Titre: " .
      $this->getTitle() .
      "<br/>" .
      " Date de publication " .
      $this->getDateOfPublication() .
      "<br/>" .
      " Cost " .
      $this->getPrice();
  }
}
$auteur = new Author("David", "Vanmak");
$livre = new Book("Le livre de la jungle", $auteur, 1990, 23);
$livre1 = new Book("Le livre de la jungle", $auteur, 1990, 23);
$livre2 = new Book("Le livre de la jungle", $auteur, 1990, 23);
$livre3 = new Book("Le livre de la jungle", $auteur, 1990, 23);

echo $auteur->getBooks();
