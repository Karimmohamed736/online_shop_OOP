<?php
require_once 'classes/conn.php';
require_once 'classes/Products.php';

$p = new Products();

echo "<pre>";
print_r($p->SelectOne(1));
