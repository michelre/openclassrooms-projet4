<?php

function getArticle($db, $nb = null, $id = null){
	if($nb AND !$id){
		$req = $db->query('SELECT * FROM listarticles LIMIT'.$nb);
		$articles = $req->fetchAll();
	}
	elseif{
		$req = $db->query('SELECT * FROM listarticles WHERE id ='.$id);
		$articles = $req->fetchObject();
	}
	else{
		$req = $db->query('SELECT * FROM listarticles');
		$articles = $req->fetchAll();
	}
	return $articles;
}