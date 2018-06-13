<?php


class Comment
{
    private $id;
    private $articleId;
    private $pseudonyme;
    private $comments;
    private $creationDate;

    /**
     * Article constructor.
     * @param $id
     * @param $title
     * @param $content
     * @param $creationDate
     */
    public function __construct($id, $articleId, $pseudonyme, $comments, $creationDate)
    {
        $this->id = $id;
        $this->articleId = $articleId;
        $this->pseudonyme = $pseudonyme;
        $this->comments = $comments;
        $this->creationDate = $creationDate;
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
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * @param mixed $id
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
    }

    /**
     * @return mixed
     */
    public function getPseudonyme()
    {
        return $this->pseudonyme;
    }

    /**
     * @param mixed $title
     */
    public function setPseudonyme($pseudonyme)
    {
        $this->pseudonyme = $pseudonyme;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $content
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }




}
