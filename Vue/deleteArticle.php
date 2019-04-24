<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Supprimer un article</title>
        <link href="style.css" rel="stylesheet" />
        <?php include 'Parts/stylesheets.html'; ?>
    </head>

    <body class="container text-center">
        <h1>Mon super forum !</h1>
        <p><i>Ici j'affiche le formulaire de suppression d'un article<i/></p>
        <br />
        <form action="/forum/index.php?controller=article&action=deleteArticleAction&id=<?=$_GET['id']?>" method="post" class="d-inline">
            <label>Êtes-vous sûre de vouloir faire ça ? </label>
            <input type="submit" value="OUI" class="btn btn-primary">
        </form>
        <form action="/forum/index.php" method="post" class="d-inline">
            <input type="submit" value="NON" class="btn btn-primary">
        </form>
    </body>
</html>