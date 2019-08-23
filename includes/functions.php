<?php

if(!function_exists('not_empty')) {
    function not_empty ($fields =[]) {
        foreach ($fields as $key => $value) {
            print("$key => $value <br>");
            if(empty($value)) {
                return false; 
            }
        }
        return true;
    } 
}