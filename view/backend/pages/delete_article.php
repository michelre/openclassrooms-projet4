<?php

session_start();

if(isset($_GET['id'])){
	$articles = $this->db->query('SELECT * FROM listarticles WHERE id = '.$_GET['id']);
	$article = $articleDB->fetch();
	if($article){
		$articles = $this->db->query('DELETE FROM listarticles WHERE id = '.$_GET['id']);
		header('Location:view/backend/admin/admin_home.php');
	}
		else{
		header('Location:view/backend/admin/admin_home.php');
	}
}

	