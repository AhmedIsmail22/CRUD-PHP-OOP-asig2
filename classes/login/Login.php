<?php





class Login{
    
    private $conn;
    private $result;
    public function __construct($conn){
        $this->conn = $conn;
    }

    public function login($email, $password){
       $isExist = new Isexist($this->conn);
       $result = $isExist->is_exist('users', "email = '$email'");
       if($result){
            $firstid = $result[0];
           $result = $isExist->is_exist('users', "password = '$password'");
           if($result){
                $secondid = $result[0];
                if($firstid == $secondid){
                    $_SESSION['user_id'] = $secondid;
                    $_SESSION['name'] = $result[1];
                   return 1;
                }
           }else{
            return "error.";
           }
       }else {
        return "email not exist.";
       }
    }
}