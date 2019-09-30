<?php
    require_once 'Library.php';
    if ($_POST['libAction'] == 'Créer') {
        $name = $_POST['libName'];
        $address = $_POST['libAddress'];
        $max = $_POST['libMax'];

        $Bibliotheque = new Library($name, $address, $max);

        session_start();
        if (!isset($_SESSION['Libraries'])) $_SESSION[] = 'Libraries';
        $_SESSION['Libraries'][] = $Bibliotheque;
        $_SESSION['status'] = 'Bibliothèque crée !';
        header('Location: index.php');
    } else {
        $_SESSION['status'] = 'ERROR';
        header('Location: index.php');
    }