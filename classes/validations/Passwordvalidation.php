<?php




class Passwordvalidation implements validationinterface{
    use Required, Length;
    private $result = 1;

    public function valid($password){
        $password = trim(htmlspecialchars($password));

        if($this->required("Name", $password) != 1){
            $this->result = $this->required("Password", $password);
        }elseif($this->max_length($password, 6) != 1){
            $this->result = "user password " . $this->max_length($password, 6);
        }

        return $this->result;
    }
}