
<?php
class Book {
  private $title;
  private $availableCopies;

  public function __construct($title, $availableCopies) {
    $this->title = $title;
    $this->availableCopies = $availableCopies;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getAvailableCopies() {
    return $this->availableCopies;
  }

  public function borrowBook() {
    if ($this->availableCopies > 0) {
      $this->availableCopies--;
      return true;
    } else {
      return false;
    }
  }

  public function returnBook() {
    $this->availableCopies++;
  }
}

$book1= new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

echo "Available Books:\n";
echo "- {$book1->getTitle()}: {$book1->getAvailableCopies()} copies\n";
echo "- {$book2->getTitle()}: {$book2->getAvailableCopies()} copies\n";

//2 

class Member {
    private $name;
  
    public function __construct($name) {
      $this->name = $name;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function borrowBook(Book &$book1) {
      if ($book1->borrowBook()) {
        echo "{$this->name} successfully borrowed {$book1->getTitle()}\n";
      } else {
        echo "{$book1->getTitle()} is not available for borrowing\n";
      }
    }
  
    public function returnBook(Book &$book1) {
      $book1->returnBook();
      echo "{$this->name} successfully returned {$book1->getTitle()}\n";
    }
  }

 
  $member1 = new Member("John Doe");
  $member2 = new Member("Jane Smith");





  




