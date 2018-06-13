<?php

session_start();

if(isset($_GET['id'])){
	$comments = $this->db->query('SELECT * FROM comments WHERE article_id = '.$_GET['article_id']);
	$comment = $articleDB->fetch();
	if($comment){
		$comments = $this->db->query('DELETE FROM comments WHERE article_id = '.$_GET['article_id']);
		header('Location:view/backend/admin/admin_home.php');
	}
		else{
		header('Location:view/backend/admin/admin_home.php');
	}
}

	