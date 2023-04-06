<?php




class Selectall{

    private $conn;


    public function __construct($conn){
        $this->conn = $conn;
    }

    public function select_all(){

        $stm = $this->conn->query("SELECT * FROM crud");
        $out = $stm->execute();
        if($out){
            $data = $stm->fetchAll();
        }else {
            $data = ["connection is failed"];
        }
        return $data;

    }
}