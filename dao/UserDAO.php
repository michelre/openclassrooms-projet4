<?php
/**
 * Created by IntelliJ IDEA.
 * User: remimichel
 * Date: 23/05/18
 * Time: 18:34
 */

class UserDAO extends BaseDAO
{
//partie inscription
	public function postRegister($id, $pseudonyme, $email, $password, $creationDate)
    {
        $dbConnect = $this->$db;
        $users = $db->prepare('INSERT INTO membres(pseudonyme, email, password, creationDate) VALUES(?, ?, ?, NOW())');
        $affectedLines = $users->execute(array($pseudonyme, $email, $password, $creationDate));

        return $affectedLines;
    }
    public function testEmail($email)
    {
    	$dbConnect = $this->$db;
    	$users = $db->prepare('SELECT count(*) as numberEmail FROM membres WHERE email = ?');
    	$User = $users->execute(array($email));

    	return $user;
    }

    //partie connexion
    public function connectBYEmail($email)
    {
    	$dbConnect = $this->$db;
    	$users = $db->prepare('SELECT * FROM membres WHERE email = ?');
    	$User = $users->execute(array($email));

    	return $user;
    }
}
