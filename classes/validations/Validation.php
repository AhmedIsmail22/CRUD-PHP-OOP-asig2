<?php


class Validation {
    public function valide($value){

        $errors = [];
        
        foreach($value as $class){
            $obj = new $class['class'];
            if($obj->valid($class['value']) != 1){
                $errors[] = $obj->valid($class['value']);
            }
        }

        if($errors){
            return $errors;
        }else {
            return 1;
        }
    }
}