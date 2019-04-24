<?php
class ArticleController{
	public function newArticleAction(){
		require 'Vue/newArticle.php';
	}
	public function deleteArticle(){
		require 'Vue/deleteArticle.php';
	}
	public function updateArticle(){
		require 'Vue/updateArticle.php';
	}
	public function formAction(){
		$article =  new Article(null, $_POST['titre'], $_POST['contenu']);
		$articleManager = new ArticleManager();
		$articleManager->insertArticle($article);
	}
	public function deleteArticleAction($id){
		$articleManager = new ArticleManager();
		$articleManager->deleteArticleAction($id);
		header('location:http://localhost/forum/index.php?controller=index&action=renderIndex');
	}
	public function updateArticleAction($id){
		$article =  new Article($id, $_POST['titre'], $_POST['contenu']);
		$articleManager = new ArticleManager();
		$articleManager->updateArticle($article);
	}
}
?>