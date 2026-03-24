<?php

//set, get, unset
class Session{

    public function __construct()
    {
        session_start();
    }
    public function set($key, $value){
        $_SESSION[$key]= $value;   //sucess = 'Inserted Successfullt'
    }
        public function get($key){
        return isset($_SESSION[$key])? $_SESSION[$key]: false ;   
    }

    // public function hasSession($key){
    //     return isset($session[$key])? true : false;
    // }

    public function unset($session){
        unset($_SESSION[$session]);
    }

    public function destroy(){
        session_destroy();
    }
}
