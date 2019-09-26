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

    public function deleteDuplicates () {

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
        sort($this->books, sortingRule());
    }
}