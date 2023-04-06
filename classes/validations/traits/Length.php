<?php



trait Length{

    public function max_length($value, $max){
    if(strlen($value) < $max){
         return  " less than $max chars.";
    }else {
        return 1 ;
    }
    }
}