<?php
class ArticleManager extends DbManager {
	public function __construct()
	{
		parent::__construct();
	}
	public function selectAll(){
		$query ='SELECT * FROM Article';
		$res = $this->bdd->query($query);
		$articles = [];
		foreach  ($res as $data) {
			$articles[] = new Article($data['id'], $data['titre'], $data['contenu'], $data['dateCreation']);
		}
		return $articles;
	}
	public function insertArticle(Article $article){
		$query = 'INSERT INTO Article(titre, contenu, dateCreation)
			VALUES ( "' . $article->getTitre() . '", "' . $article->getContenu() . '", "' . $article->getDateCreation() . '" )';
		$res = $this->bdd->prepare($query);
		$res->execute();
		$article->setId($this->bdd->lastInsertId());
	}
	public function deleteArticleAction($id){
		$query = 'DELETE FROM Article WHERE id = ' . $id;
		$res = $this->bdd->prepare($query);
		$res->execute();
	}
	public function updateArticleAction(Article $article){
		$query = 'UPDATE Article SET titre = "' . $article->getTitre() . '", contenu = "' . $article->getContenu() . '" WHERE id = ' . $article->getId();
		$res = $this->bdd->prepare($query);
		$res->execute();
	}

}