<?php

require_once 'Validation.php';

class Required implements Validation {
    public function validate($name, $value)
    {
        if (empty($value)) {
            return "$name is Required";
        }
        return false;
    }
}