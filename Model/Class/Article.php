<?php
class Article extends ArticleManager {
	private $id;
	private $titre;
	private $contenu;
	private $dateCreation;
	public function __construct($id = null, $titre = null, $contenu = null, $dateCreation = null)
	{
		$this->id = $id;
		$this->titre = $titre;
		$this->contenu = $contenu;
		if(is_null($dateCreation)){
			$dateCreation = date('Y-m-d');
		}
		$this->dateCreation = $dateCreation;
	}
	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}
	/**
	 * @return mixed
	 */
	public function getTitre()
	{
		return $this->titre;
	}
	/**
	 * @param mixed $titre
	 */
	public function setTitre($titre)
	{
		$this->titre = $titre;
	}
	/**
	 * @return mixed
	 */
	public function getContenu()
	{
		return $this->contenu;
	}
	/**
	 * @param mixed $contenu
	 */
	public function setContenu($contenu)
	{
		$this->contenu = $contenu;
	}
	/**
	 * @return mixed
	 */
	public function getDateCreation()
	{
		return $this->dateCreation;
	}
	/**
	 * @param mixed $dateCreation
	 */
	public function setDateCreation($dateCreation)
	{
		$this->dateCreation = $dateCreation;
	}
	public function getAll(){
		return parent::selectAll();
	}
}