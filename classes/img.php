<?php

//handle img
class img{
    private $name, $tmpname;
    public $newName;
    public function __construct(array $img)
    {
        $this->name = $img['name'];
        $this->tmpname = $img['tmp_name'];
        $ext = pathinfo($this->name,PATHINFO_EXTENSION);

        $this->newName = uniqid(). "." . $ext;
    }

    public function upload(){
        move_uploaded_file($this->tmpname, "../images/$this->newName");
    }
}