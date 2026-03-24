<?php
require_once 'Max.php';
require_once 'Number.php';
require_once 'Required.php';
require_once 'ValidStr.php';
require_once 'Email.php';

class Validator
{
    public $errors = [];

    //to insert object and avoid repetation
    public function makeValidate($name, $value, $obj)
    {
        return $obj->validate($name, $value);  //validate of class Validation interface
    }

    public function rules($name, $value, $rules)
    {
        //to pass on all erros and select the suitable error
        foreach ($rules as $rule) {
            if ($rule == 'email') {  // 'name'=> 'required|email',
                $error = $this->makeValidate($name, $value, new Email);
            } elseif ($rule == 'max') {
                $error = $this->makeValidate($name, $value, new Max);
            } elseif ($rule == 'number') {
                $error = $this->makeValidate($name, $value, new Number);
            } elseif ($rule == 'required') {
                $error = $this->makeValidate($name, $value, new Required);
            } elseif ($rule == 'string') {
                $error = $this->makeValidate($name, $value, new ValidStr);
            }else {
                $error = false;
            }

            //after find all errors store it in errors[]
            if ($error != false) {
                $this->errors[]= $error;
            }
        }
    }
}
