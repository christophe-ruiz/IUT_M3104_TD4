<?php
require_once 'Book.php';

class Library
{
    const MAX_BOOKS = 5;

    private $name;
    private $address;
    private $max;
    private $books = array(self::MAX_BOOKS);

    public function __construct($name, $address, $max)
    {
        $this->name = $name;
        $this->address = $address;
        $this->max = $max;
    }

    // GETTERS
    public function getAddress()
    {
        return $this->address;
    }

    public function getBooks()
    {
        return $this->books;
    }

    public function getMax()
    {
        return $this->max;
    }

    public function getName()
    {
        return $this->name;
    }

    // SETTERS
    public function setAddress(&$address)
    {
        $this->address = $address;
    }

    public function setBooks(&$books)
    {
        $this->books = $books;
    }

    public function setMax(&$max)
    {
        $this->max = $max;
    }

    public function setName(&$name)
    {
        $this->name = $name;
    }

    // MISC.

    public function showBooks() {
        foreach ($this->books as &$book ) {
            $book.show();
        }
    }

    public function addBook (Book &$newBook) {
        if (count($this->books) < self::MAX_BOOKS) {
            $this->books[] = $newBook;
        }
    }

    public function removeBook (Book &$trash) {
        foreach ($this->books as $key => $book) {
            if ($book == $trash ) {
                unset($this->books[$key]);
            }
        }
    }

    public function deleteDuplicates () {
        foreach ($this->books as $key1 => $book1) {
            foreach ($this->books as $key2 => $book2) {
                if ($book2->getTitle() == $book1->getTitle() && $book2->getAuthor() == $book1->getAuthor()
                    && $key1 != $key2) {
                    unset($this->books[$key1]);
                }
            }
        }
    }

    public function showCommonBooks (Library $otherLibrary) {
        foreach ($this->books as $book1) {
            foreach ($otherLibrary->books as $book2) {
                if ($book2->getTitle() == $book1->getTitle() && $book2->getAuthor() == $book1->getAuthor())
                    $book1->show();
            }
        }
    }

    function sortingRule (Book $book1, Book $book2)
    {
        return (($book1->getAuthor() > $book2->getAuthor()) ? 1 : ($book1->getAuthor() > $book2->getAuthor()) ? -1 : 0);
    }

    public function sortByAuthor ()
    {
        sort($this->books, $this->sortingRule());
    }
}