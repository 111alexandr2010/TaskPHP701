<?php

class User
{
    private $trueLogin = 'admin';
    private $truePassword = '111';

    public function check($login, $pass)
    {
        if ($this->trueLogin == $login && $this->truePassword == $pass) {
            return true;
        }
        return false;
    }

    public function logout()
    {
        $session = new Session();
        $session->destroy();
    }
}
$user = new User();