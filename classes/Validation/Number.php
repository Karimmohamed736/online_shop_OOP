<?php

require_once 'Validation.php';

class Number implements Validation
{
    public function validate($name, $value)
    {
        if (!is_numeric($value)) {
            return "$name Must be number!";
        } else {
            return false;
        }
    }
}
