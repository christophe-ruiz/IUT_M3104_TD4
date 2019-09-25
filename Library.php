<?php


class Library
{
    const MAX_BOOKS = 5;

    private $name;
    private $adress;
    private $max;
    private $books = array(self::MAX_BOOKS);

    public function __construct($name, $adress, $max)
    {
        $this->name = $name;
        $this->adress = $adress;
        $this->max = $max;
    }

    // GETTERS
    public function getAdress()
    {
        return $this->adress;
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
    public function setAdress(&$adress)
    {
        $this->adress = $adress;
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

    public function deleteDuplicates () {}

    public function showCommonBooks (Library $otherLibrary) {}

    public function sortByAuthor () {}
}