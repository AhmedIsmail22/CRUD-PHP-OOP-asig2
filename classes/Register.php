<?php


class Register{

    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    public function create_account($data){
        $valid = new Validation;
        if($valid->valide($data) != 1){
            return $valid->valide($data);
        }else {
            return 1;
        }
        
    }
}