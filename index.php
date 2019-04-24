<?php
include 'include.php';
//Si on demande la page d'acceuil // On affiche tous les articles
if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
	$indexController = new IndexController();
	$indexController->renderIndexAction();
}
// Si on demande la page article
	//Si on demande a inserer un article
	if($_GET['controller'] === 'article' && $_GET['action'] == 'newArticle'){
		$articleController = new ArticleController();
		$articleController->newArticleAction();
	}
	//Si on demande a supprimer l'article
	if($_GET['controller'] === 'article' && $_GET['action'] == 'deleteArticle') {
		$articleController = new ArticleController();
		$articleController->deleteArticleAction($_GET['id']);
	}
	// Si on demande l'action de modification
	if($_GET['controller'] === 'article' && $_GET['action'] == 'updateArticle'){
		$articleController = new ArticleController();
		$articleController->updateArticleAction($_GET['id']);
	}
	// Si on demande le formulaire d'insertion
	if($_GET['controller'] === 'article' && $_GET['action'] == 'formArticle'){
		$articleController = new ArticleController();
		$articleController->formAction();
	}
?>