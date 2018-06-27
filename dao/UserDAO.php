<?php

require_once "BaseDAO.php";
require_once "model/User.php";

class UserDAO extends BaseDAO
{
    public function addDefaultUser()
    {
        $stmt = $this->db->prepare('INSERT INTO membres(pseudonyme, password, creationDate) VALUES(?, ?, NOW())');
        return $stmt->execute(array('admin', password_hash("admin", PASSWORD_DEFAULT)));
    }

    public function getByPseudonyme($pseudo)
    {
        $userDB = $this->db
            ->query("SELECT * FROM membres WHERE pseudonyme='".$pseudo . "'")
            ->fetch();
        return new User($userDB["id"], $userDB["pseudonyme"], $userDB["password"], $userDB["creationDate"]);
    }
}
