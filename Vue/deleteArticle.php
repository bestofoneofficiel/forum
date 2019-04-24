<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon forum</title>
	<link href="style.css" rel="stylesheet" />
	<?php
	include 'Parts/stylesheets.html';
	?>
</head>

<body>
<h1>Mon super forum !</h1>
<p>Ici j'affiche le formulaire d'ajout d'un article</p>

<form action="/forum/index.php?controller=article&action=deleteArticleAction&id=<?=$_GET['id']?>" method="post">
	<label>Êtes-vous sûre de vouloir faire ça ?</label>
	<input type="submit" value="OUI">
</form>
</body>
</html>