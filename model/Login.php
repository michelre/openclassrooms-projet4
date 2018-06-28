<?php


class Login
{
    private $id;
    private $pseudonyme;
    private $email;
    private $password;
    private $creationDate;

    /**
     * Article constructor.
     * @param $id
     * @param $title
     * @param $content
     * @param $creationDate
     */
    public function __construct($id, $pseudonyme, $email, $password, $creationDate)
    {
        $this->id           = $id;
        $this->pseudonyme   = $pseudonyme;
        $this->email        = $email;
        $this->password     = $password;
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
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param mixed $content
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $creationDate
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
