<?php
require_once 'conn.php';
class Products extends MySql
{

    public function SelectAll()
    {
        $q = "SELECT * from products ";
        $res = mysqli_query($this->conn, $q);

        $products = [];
        if (mysqli_num_rows($res) > 0) {
            $products =  mysqli_fetch_all($res, MYSQLI_ASSOC);
        }
        return $products;
    }
    public function SelectOne($id)
    {
        $q = "SELECT * from products where id = $id ";
        $res = mysqli_query($this->conn, $q);

        $products = [];
        if (mysqli_num_rows($res) == 1) {
            $products =  mysqli_fetch_assoc($res);
        }
        return $products;
    }
    public function Create($name, $price, $description, $img)
    {
        $q = "SELECT * from products ";
        $res = mysqli_query($this->conn, $q);

        if ($res) {
            $query = "INSERT into products (`name`,`price`,`description`,`img`) values ('$name','$price','$description','$img') ";
            $result = mysqli_query($this->conn, $query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function Update($id, $name, $price, $description, $img)
    {
        $query = "UPDATE `products` set 
        `name`='$name',
        `price` = '$price',
        `description`='$description',
        `img`='$img'
         where `id` = '$id' ";

        $result = mysqli_query($this->conn, $query);
        if (mysqli_affected_rows($this->conn)) {
            return true;
        } else {
            return false;
        }
    }
    public function Delete($id)
    {
        $q = "DELETE from `products` where `id` = '$id'";
        $res = mysqli_query($this->conn, $q);
        if (mysqli_affected_rows($this->conn)) {
            return true;
        } else {
            return false;
        }
    }
}
