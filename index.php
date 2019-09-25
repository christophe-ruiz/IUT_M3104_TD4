<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>TD 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <form action="createBook.php" method="POST">
            <label for="title">Titre</label>
            <input name="title" placeholder="Entrez le titre de livre" type="text">

            <label for="author">Auteur</label>
            <input name="author" placeholder="Entrez l'auteur du livre" type="text">

            <label for="editor">Editeur</label>
            <input name="editor" placeholder="Entrez l'éditeur du livre" type="text">

            <label for="pages">Nombre de pages</label>
            <input name="pages" placeholder="Entrez le nombre de pages du livre" type="text">

            <input name="action" type="submit" value="Créer">
        </form>
    </div>
</body>
</html>