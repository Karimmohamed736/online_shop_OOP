<?php

require_once 'Validation.php';

class Email implements Validation{
    public function validate($name, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return "$name Must be Valid Email";
        }
        return false;
    }
}