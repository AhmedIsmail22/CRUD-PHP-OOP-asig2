<?php



class Emailvalidation implements validationinterface{

    use Required, Isemail;

    private $result = 1;
    public  function valid($value){
        $value = trim(htmlspecialchars($value));

        if($this->required("E-Mail", $value) != 1){
            $this->result = $this->required("E-Mail", $value);
        }elseif($this->is_email($value) != 1){
            $this->result = $this->is_email($value);
        }
        return $this->result;
    }
}