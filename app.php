<?php
//carry all classes

require_once 'classes/Products.php';
require_once 'classes/conn.php';
require_once 'classes/description.php';
require_once 'classes/Request.php';
require_once 'classes/Session.php';
require_once 'classes/Validation/Validator.php';



// $img = new img($img);  //in file insert directly as img wait for ($img)
$product = new Products();
$request = new Request();
$session = new Session();
$validate = new Validator();

