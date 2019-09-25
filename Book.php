<?php


class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;

    public function __construct($author, $editor, $pageNb, $title)
    {
        $this->author = $author;
        $this->editor = $editor;
        $this->pageNb = $pageNb;
        $this->title = $title;
    }

    // GETTERS
    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getEditor()
    {
        return $this->editor;
    }

    public function getPageNb()
    {
        return $this->pageNb;
    }

    // SETTERS
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    public function setPageNb($pageNb)
    {
        $this->pageNb = $pageNb;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    // MISC.

    public function show() {
        echo '<div class = "author">' . PHP_EOL . '\t' . $this->author . PHP_EOL . '</div>' . PHP_EOL;
        echo '<div class = "bookTitle">' . PHP_EOL . '\t' . $this->title . PHP_EOL . '</div>' . PHP_EOL;
    }


}