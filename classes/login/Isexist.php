<?php




class Isexist{

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function is_exist($table, $cond){
        $stm = $this->conn->query("SELECT * FROM $table WHERE $cond");
        $stm->execute();
        $row = $stm->fetch();
        if($stm->rowCount() == 1){
            $this->result = [$row['id'], $row['name']];
        }else {

            $this->result =  false;
        }
        return $this->result;
    }
}