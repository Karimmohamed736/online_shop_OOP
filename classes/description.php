<?php

class Str{
    public static function limit($str){
        if (strlen($str)>20) {
            return substr($str,0,34). "..........";
        }
        return $str;
    }
}