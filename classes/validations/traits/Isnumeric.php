<?php 



trait Isnumeric {
    public function is_string($value){
        if(is_numeric($value)){
            return " must be string.";
        }else {
            return 1;
        }
    }
}