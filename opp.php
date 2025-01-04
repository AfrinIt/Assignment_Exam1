<?php

class Book {
    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Getter method for title
    public function getTitle() {
        return $this->title;
    }

    // Getter method for availableCopies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
            $this->availableCopies--;}
         

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property
    private $name;

    // Constructor to initialize the member name
    public function __construct($name) {
        $this->name = $name;
    }

    // Getter method for name
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book (accepts a Book object)
    public function borrowBook(Book $book) {
       
        $book -> borrowBook();
    }

    // Method to return a book (accepts a Book object)
    public function returnBook(Book $book) {
        $book->returnBook();
      //  echo $this->name . " has returned '" . $book->getTitle() . "'.\n";
    }
}

// Usage

// Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member One (John) borrows Book 1
$member1->borrowBook($book1);

// Member Two (Jane) borrows Book 2
$member2->borrowBook($book2);

// Print available copies after borrowing
//echo "\nphAvailable Copies after borrowing:\n";
echo "Available Copies of " . $book1->getTitle() . " : " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of " . $book2->getTitle() . " : " . $book2->getAvailableCopies() . "\n";


?>
