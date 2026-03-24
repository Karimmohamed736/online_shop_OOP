<?php

class MySql{
    private $hostname = 'localhost', $username = 'root', $pass = '', $dbname ='online_shop_oop';
    protected $conn;
    public function __construct()
    {
       $this->conn = mysqli_connect($this->hostname, $this->username,$this->pass, $this->dbname);
    }
}