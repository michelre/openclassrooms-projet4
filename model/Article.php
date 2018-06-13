<?php


class Article
{
    private $id;
    private $title;
    private $content;
    private $pseudonyme;
    private $creationDate;

    /**
     * Article constructor.
     * @param $id
     * @param $title
     * @param $content
     * @param $creationDate
     */
    public function __construct($id, $title, $content, $pseudonyme, $creationDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->pseudonyme = $pseudonyme;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getPseudonyme()
    {
        return $this->pseudonyme;
    }

    /**
     * @param mixed $content
     */
    public function setPseudonyme($pseudonyme)
    {
        $this->pseudonyme = $pseudonyme;
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
