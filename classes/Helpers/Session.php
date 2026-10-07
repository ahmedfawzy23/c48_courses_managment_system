<?php

namespace Classes\Helpers;

class Session
{

    public function __construct()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {

            session_start();
        }
    }

    public function set($key, $value)
    {
        $this->createIfNotExist($key);
        $_SESSION[$key] = $value;
    }
    public function push($key, $value)
    {
        $this->createIfNotExist($key);
        $_SESSION[$key][] = $value;
    }


    public function pull($key)
    {
        $this->createIfNotExist($key);
        return $_SESSION[$key];
    }
    public function pullFlash($key)
    {
        $this->createIfNotExist($key);
        $data = $_SESSION[$key];
        $this->remove($key);
        return $data;
    }

    private function createIfNotExist($key)
    {
        if (!isset($_SESSION[$key])) {
            $_SESSION[$key] = [];
        }
    }

    public function remove($key)
    {
        unset($_SESSION[$key]);
    }
    public function destroy($key)
    {
        session_destroy();
    }
    // push
    // pull
    // check value
    // unset
    // destroy
}

        // $_SESSION['user'] = [];
// 
