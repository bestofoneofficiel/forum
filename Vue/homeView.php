<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Mon forum</title>
        <link href="style.css" rel="stylesheet" />
        <?php include 'Parts/stylesheets.html'; ?>
    </head>
    <body class="container">
        <h1 class="text-center">Mon forum</h1>
        <p class="text-center"><i>Derniers articles du forum</i></p>
        <p class="text-center"><a href="/forum/index.php?controller=article&action=newArticle" class="btn btn-primary">Ajouter un article</a></p>

        <?php
        foreach ($articles as $article) {?>

            <div class="news border rounded m-4 p-3">
                <h2 class="text-primary"><?=$article->getTitre()?></h2>
                <p class="text-secondary"><i>Crée le <?=$article->getDateCreation()?></i></p>
                <p class="bg-light">
                    <?=nl2br(htmlspecialchars($article->getContenu()));?>
                </p>
                <p class="text-right">
                    <a href="#" class="btn btn-primary">Voir les commentaires</a>
                    <a href="/forum/index.php?controller=article&action=updateArticle&id=<?=$article->getId()?>" class="btn btn-info">Modifier</a>
                    <a href="/forum/index.php?controller=article&action=deleteArticle&id=<?=$article->getId()?>" class="btn btn-warning">Supprimer</a></p>
            </div><?php
        } ?>
        <p class="text-center"><a href="/forum/index.php?controller=article&action=newArticle" class="btn btn-primary">Ajouter un article</a></p>
    </body>
</html>