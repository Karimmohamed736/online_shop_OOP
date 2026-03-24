<?php

require_once 'Validation.php';

class ValidStr implements Validation
{
    public function validate($name, $value)
    {
        if (is_string($value)) {
            return false;
        } else {
            return "$name Must be string";
        }
    }
}
