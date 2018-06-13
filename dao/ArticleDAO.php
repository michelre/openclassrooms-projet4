<?php

require_once('BaseDAO.php');
require_once('model/Article.php');
require_once('model/comment.php');

class ArticleDAO extends BaseDAO
{

    public function getArticles()
    {
        $articlesDB = $this->db
            ->query('SELECT * FROM listarticles ORDER BY creationDate DESC')
            ->fetchAll();
        $articles = array();
        foreach ($articlesDB as $article) {
            array_push($articles, new Article($article['id'], $article['titlearticles'], $article['content'], $article['pseudonyme'], $article['creationDate']));
        }
        return $articles;
    }

    public function getArticleById($articleId)
    {
        $articleDB = $this->db
            ->query('SELECT * FROM listarticles WHERE id = ' . $articleId)
            ->fetch();
        return new Article($articleDB['id'], $articleDB['titlearticles'], $articleDB['content'], $articleDB['pseudonyme'], $articleDB['creationDate']);
    }

    public function getDernierArticle()
    {
        $articleDB = $this->db
            ->query('SELECT * FROM listarticles ORDER BY creationDate DESC LIMIT 0, 1')
            ->fetch();
        return new Article($articleDB['id'], $articleDB['titlearticles'], $articleDB['content'], $articleDB['pseudonyme'], $articleDB['creationDate']);
        }
        
      public function postArticle($titlearticles, $content)
      {
        $articles = $this->db->prepare('INSERT INTO listarticles (titlearticles, content, creationDate) VALUES (?, ?, now())');
        $affectedLines = $articles->execute(array($titlearticles, $content));
        return $affectedLines;
      }

      public function modifyArticle($titlearticles, $content, $creationDate)
      {
        $articles = $this->db->prepare('UPDATE listarticles SET titlearticles = :titlearticles, content = :content, creationDate = :creationDate WHERE id = :id');
        $affectedLines = $articles->execute([
            'titlearticles' => $_POST['titlearticles'],
            'content' => $_POST['content'],
            'creationDate' => $_POST['creationDate'],
            'id' => $_POST['id'],
        ]);
        return $affectedLines;
      } 

       public function delete($articleId)
       {
        $req = $this->db->query('DELETE FROM listarticles WHERE id = '.$articleId);
        $req->execute();
       } 
}




