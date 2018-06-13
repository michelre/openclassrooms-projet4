<?php


class commentDAO extends BaseDAO
{

     public function postComment($articleId, $pseudonyme, $content)
    {
        $comments = $this->db->prepare('INSERT INTO comments(article_id, pseudonyme, comments, creationDate) VALUES(?, ?, ?, NOW())');
        
        $affectedLines = $comments->execute(array($articleId, $pseudonyme, $content));

        return $affectedLines;
    }

    public function getCommentsByArticle($articleId)
    {
        $commentsdb = $this->db->query('SELECT * FROM comments WHERE article_id = '. $articleId )->fetchAll();
        $comments = array();
        foreach ($commentsdb as $comment) {
        	array_push($comments, new Comment($comment['id'], $comment['article_id'], $comment['pseudonyme'], $comment['comments'], $comment['creationDate']));
        }
        return $comments;
}

}
