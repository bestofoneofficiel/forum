<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Modification d'un article</title>
        <link href="style.css" rel="stylesheet" />
        <?php include 'Parts/stylesheets.html'; ?>
    </head>

    <body class="container text-center">
        <h1>Modification d'un article</h1>
        <p><i>Ici j'affiche le formulaire de modification d'un article</i></p>

        <form action="/forum/index.php?controller=article&action=updateArticleAction&id=<?=$_GET['id']?>" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Titre</label>
                <input name="titre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ici je met le nom de mon article">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Texte</label>
                <textarea name="contenu" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ici je met le contenu de mon article"></textarea>
            </div>
            <input type="submit" value="Modifier" class="btn btn-primary">
        </form>
    </body>
</html>