<?php


class Update{

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }


    public function update($table, $updates, $cond){

    
        // $stm = $this->conn->query("UPDATE $table SET $updates WHERE $cond");
        // $out = $stm->execute();
        // if($out){
        //     return true;
        // }else {
        //     return false;
        // }
    }
}