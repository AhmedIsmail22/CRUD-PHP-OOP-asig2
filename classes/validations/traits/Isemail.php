<?php 




trait Isemail {

    public function is_email($value){
        if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
            return "E-Mail is invalid.";
        }
        else {
            return 1;
        }
    }
}