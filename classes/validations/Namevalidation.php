<?php




class Namevalidation implements validationinterface{

        use Required, Isnumeric, Length;

        private $result = 1;

    public function valid($name){
        $name = trim(htmlspecialchars($name));
        if($this->required("Name", $name) != 1){
            $this->result =  $this->required("Name", $name);
        }elseif($this->is_string($name) != 1){
            $this->result =  "user name " . $this->is_string($name);
        }elseif($this->max_length($name, 3) != 1){
            $this->result =  "user name " . $this->max_length($name, 3);
        }
           return $this->result;
    }
}