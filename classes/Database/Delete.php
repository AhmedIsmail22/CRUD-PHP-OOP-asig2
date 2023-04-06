<?php 






class Delete{
    private $conn;


    public function __construct($conn){
        $this->conn = $conn;
    }

    public function delete($table, $id){
        $stm = $this->conn->prepare("DELETE FROM $table WHERE id=:id");
        $stm->bindParam(":id", $id);
        return $stm->execute();
    }
}