<?php

require_once 'Validation.php';

class Max implements Validation {
    public function validate($name, $value)
    {
        if (strlen($value)>80) {
            return "$name must be less than 80 characters";
        }
        return false;
    }
}