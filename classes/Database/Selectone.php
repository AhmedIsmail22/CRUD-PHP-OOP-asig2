<?php



class Selectone{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }


    public function select_one($table, $id){
        $stm = $this->conn->prepare("SELECT * FROM $table WHERE id=:id");
        $stm->bindParam(':id', $id);
        $stm->execute();
        if($stm->rowCount() == 1){
            $data = $stm->fetch();
            return  $data;
        }else {
            return 0;
        }

    }
}