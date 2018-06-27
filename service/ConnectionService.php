<?php

class ConnectionService
{
    private $cookieName = 'projet4-membres';

    public function initConnection()
    {
        setCookie($this->cookieName, 'value_' . $this->cookieName, time() + 3600);
    }

    public function isConnected()
    {
        return isset($_COOKIE[$this->cookieName]);
    }

    public function logout()
    {
        setcookie($this->cookieName, "", time() - 3600);
    }

}
