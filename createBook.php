<?php
    require_once 'Book.php';
    if ($_POST['bookAction'] == 'Créer') {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $editor = $_POST['editor'];
        $pages = $_POST['pages'];

        $Livre = new Book($author, $editor, $pages, $title);

        $_SESSION['Books'][$author] = $Livre;
        $_SESSION['status'] = 'Livre crée !';
        header('Location: index.php');
    } else {
        $_SESSION['status'] = 'ERROR';
        header('Location: index.php');
    }
