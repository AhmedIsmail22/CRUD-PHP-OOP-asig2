<?php



class RequiredData{
    use Required;

    public function valid($name){
       return  $this->required("Input", $name);
    }
}