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

    public function create($title, $content, $pseudonyme)
    {
        $articles = $this->db->prepare('INSERT INTO listarticles (titlearticles, content, pseudonyme, creationDate) VALUES (?, ?, ?, now())');
        $affectedLines = $articles->execute(array($title, $content, $pseudonyme));
        return $affectedLines;
    }

    public function delete($articleId)
    {
        $req = $this->db->query('DELETE FROM listarticles WHERE id = ' . $articleId);
        $req->execute();
    }

    public function update($articleId, $title, $content)
    {
        $stmt = $this->db->prepare('UPDATE listarticles SET titlearticles = ?, content = ? WHERE id = ?');
        return $stmt->execute(array($title, $content, $articleId));

    }
}




