<?php

class Author
{
  private $name;
  private $firstName;

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
    return "This author is " . $this->getAuthor() . "</br>" . "Books : ";
  }
}

// Books
class Book
{
  private $title;
  private $author;
  private $dateOfPublication;
  private $price;

  public function __construct(
    string $title = "N/A",
    Author $author = null,
    int $dateOfPublication = 0,
    int $price = 0
  ) {
    $this->title = $title;
    $this->author = $author;
    $this->dateOfPublication = $dateOfPublication;
    $this->price = $price;
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
    $author->addBook($this);
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

$auteur1 = new Author("David", "Vanmak");
?>
<h1>Créer un auteur , puis des livres et ajouter les livres à l'auteur</h1>
<p> Nouvel écrivain <?php echo $auteur1->getAuthor(); ?> </p>
<p> Les livres qu'il a écrit :  <?php echo $auteur1->getBooks(); ?> </p>

<hr>
<h2>Livre 1</h2>
<?php $livre1 = new Book("Le livre de la jungle"); ?>
<p>Le premier livre est <?php echo $livre1->getTitle(); ?></p>
<p>L'auteur du livre est <?php echo $livre1->getAuthor(); ?> ( Il n'a pas été défini )</p>

<h3>Définir l'auteur du livre</h3>

<?php $livre1->setAuthor($auteur1); ?>
<p>L'auteur du livre <?php echo $livre1->getTitle(); ?> est <?php echo $livre1->getAuthor(); ?> </p>

<!-- Ajouter un deuxième livre au même auteur -->
<h2>Livre 2</h2>
<?php
$livre2 = new Book("Ta mère la pute");
$livre2->setAuthor($auteur1);
?>
<p>L'auteur du livre <?php echo $livre2->getTitle(); ?> est <?php echo $livre1->getAuthor(); ?> </p>


<h2>Lister les livres de l'auteur</h2>

<p>L'auteur <?php echo $auteur1->getAuthor(); ?> a écrit <?php echo $auteur1->getBooks(); ?></p>

<h1>Créer un auteur ( fait ) et ajouter un livre depuis l'auteur et lister</h1>

<h2>Livre 3</h2>
 
<?php $livre3 = new Book("La danse pour les nuls"); ?>

<p>
    Le dernier putain de livre est <?php echo $livre3->getTitle(); ?>
</p>

<p>L'auteur n'est forcément pas défini : La preuve <?php echo $livre3->getAuthor(); ?></p>

<h4>Partir de l'auteur et ajouter le dernier livre puis le lister</h4>
<h1>Attention Est ce que ça va marcher ? JE NE SAIS PAS :o </h1>
<?php $auteur1->addBook($livre3); ?>

<?php
$auteur1->addBook($livre3);
$livre3->setAuthor($auteur1);
?>

<h4>vérifier l'auteur du livre 3</h4>
<p> L'auteur du livre <?php echo $livre3->getTitle(); ?> est <?php echo $livre3->getAuthor(); ?></p>

<h1>NON FORCÉMENNNNT</h1>