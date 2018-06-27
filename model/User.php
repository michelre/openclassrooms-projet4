<?php
/**
 * Created by IntelliJ IDEA.
 * User: remimichel
 * Date: 24/06/18
 * Time: 00:02
 */

class User
{

    private $id;
    private $pseudonyme;
    private $password;
    private $creationDate;

    /**
     * User constructor.
     * @param $id
     * @param $pseudonyme
     * @param $password
     * @param $creationDate
     */
    public function __construct($id, $pseudonyme, $password, $creationDate)
    {
        $this->id = $id;
        $this->pseudonyme = $pseudonyme;
        $this->password = $password;
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
     * @param mixed $pseudonyme
     */
    public function setPseudonyme($pseudonyme)
    {
        $this->pseudonyme = $pseudonyme;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
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
