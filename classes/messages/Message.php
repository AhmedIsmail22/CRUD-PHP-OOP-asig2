<?php



class Message{
    public function error_msg($msg){
        foreach($msg as $item){
            echo "<div class='alert alert-danger text-center'>" . $item . "</div>";
        }
    }

    public function success_msg($msg){
        foreach($msg as $item){
            echo "<div class='alert alert-success text-center'>" . $item . "</div>";
        }
    }
}