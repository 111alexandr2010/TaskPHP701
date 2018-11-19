<?php

class Session
{
    public function destroy()
    {
        session_destroy();
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }
}

$session = new Session();
$session->set('login', 'admin');
$session->set('pass', '111');