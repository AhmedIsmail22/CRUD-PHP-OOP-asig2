<?php 




trait Required{
    public function required($key, $name){
        if(empty($name)){
            return "$key is required.";
        }else{
            return 1;
        }
    }
}