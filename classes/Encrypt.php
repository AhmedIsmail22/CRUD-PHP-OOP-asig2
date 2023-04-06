<?php

// $verify = password_verify($unencrypted_password, $hash); 
class Encrypt{

    public function encrypt_data($value){
        return password_hash($value, PASSWORD_DEFAULT);
    }
}