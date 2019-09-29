<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>TD 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bookForm">
        <h1 class="bookTextColor"> Book </h1>
        <form action="createBook.php" method="POST">
            <label class="bookTextColor" for="title">Titre</label>
            <input class="breath" name="title" placeholder="Entrez le titre de livre" type="text">

            <label class="bookTextColor" for="author">Auteur</label>
            <input class="breath" name="author" placeholder="Entrez l'auteur du livre" type="text">

            <label class="bookTextColor" for="editor">Editeur</label>
            <input class="breath" name="editor" placeholder="Entrez l'éditeur du livre" type="text">

            <label class="bookTextColor" for="pages">Nombre de pages</label>
            <input class="breath" name="pages" placeholder="Entrez le nombre de pages du livre" type="text">

            <input class="bookTextColor" name="action" type="submit" value="Créer">
        </form>
    </div>

    <div class="libForm">
        <h1 class="libTextColor"> Library </h1>
        <form action="createLibrary.php" method="POST">
            <label class="libTextColor" for="libName">Nom</label>
            <input class="breath" name="libName" placeholder="Bibliothèque nationale de France" type="text">

            <label class="libTextColor" for="libAddress">Adresse</label>
            <input class="breath" name="libAddress" placeholder="Quai François Mauriax, 75706 Paris" type="text">

            <label class="libTextColor" for="libMax">Nb. de livres max</label>
            <input class="breath" name="libMax" placeholder="5" type="text">

            <input class="libTextColor" name="action" type="submit" value="Créer">
        </form>
    </div>

    <div class="actions">
        <a href="./php/libraryActions.php"> ACTIONS </a>
    </div>
</body>
</html>