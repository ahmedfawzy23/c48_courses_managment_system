<?php

namespace Classes\Helpers;

class Request
{
    public function get($key)
    {
        return $_GET[$key] ?? null;
    }
    public function post($key)
    {
        return $_POST[$key] ?? null;
    }
    public function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] === "POST";
    }
    public function isGet()
    {
        return $_SERVER['REQUEST_METHOD'] === "GET";
    }
    public static function redirect($path)
    {
        header('location: ' . $path);
        exit();
    }
}
