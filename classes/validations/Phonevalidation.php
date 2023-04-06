<?php




class Phonevalidation implements validationinterface{
    use Required, Isnumeric, Length;

    private $result = 1;
    public function valid($phone){
        $phone = trim(htmlspecialchars($phone));
        if($this->required("Phone", $phone) != 1){
            $this->result =  $this->required("Phone", $phone);
        }elseif(!is_numeric($phone)){
            $this->result =  "user phone must be number.";
        }elseif($this->max_length($phone, 10) != 1){
            $this->result =  "user phone " . $this->max_length($phone, 10) ;
        }
        return $this->result;
    }
}