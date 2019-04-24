<?php
include 'include.php';

// De base on affiche pas la page d'acceuil
$basePage = false;

// Si on a demandé un page
if(!empty($_GET['controller'])) {

	// Si on demande la page article
	if ($_GET['controller'] === 'article') {

		// Si on demande a inserer un article
		if ($_GET['action'] == 'newArticle') {
			$articleController = new ArticleController();
			$articleController->newArticleAction();
		}
		// Sinon si on demande a supprimer l'article
		else if ($_GET['action'] == 'deleteArticle') {
			$articleController = new ArticleController();
			$articleController->deleteArticle();
		}
		// Sinon si on demande l'action de modification
		else if ($_GET['action'] == 'deleteArticleAction') {
			$articleController = new ArticleController();
			$articleController->deleteArticleAction($_GET['id']);
		}
		// Sinon si on demande une modification
		else if ($_GET['action'] == 'updateArticle') {
			$articleController = new ArticleController();
			$articleController->updateArticle($_GET['id']);
		}
		// Sinon si on demande l'action de modification
		else if ($_GET['action'] == 'updateArticleAction') {
			$articleController = new ArticleController();
			$articleController->updateArticleAction($_GET['id']);
		}
		// Sinon si on demande le formulaire d'insertion
		else if ($_GET['action'] == 'formArticle') {
			$articleController = new ArticleController();
			$articleController->formAction();
		}
		// Sinon on a demandé aucune de ses pages
		else {
			$basePage = true;
		}
	} else {
		$basePage = true;
	}
} else {
	$basePage = true;
}

// Si on a demandé la page d'acceuil ou aucune page ou dans tous les autre cas
if($basePage) {
	$indexController = new IndexController();
	$indexController->renderIndexAction();
}


?>