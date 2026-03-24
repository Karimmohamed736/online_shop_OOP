<?php

class Request
{
    public function get($key)
    {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        } else {
            return false;
        }
    }
    public function post($key)
    {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        } else {
            return false;
        }
    }
    public function file($key)
    {
        if (isset($_FILES[$key])) {
            return $_FILES[$key];
        } else {
            return false;
        }
    }
    public function hasPost($key)
    {
        return isset($_POST[$key])?? null;
    }

    public function redirect($path)
    {
        header("location:" . $path);
    }
}
