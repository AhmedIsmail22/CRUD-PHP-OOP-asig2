<?php


require_once '../App.php';

if($request->hasPost($request->post("login"))){
    $email = $request->post("email");
    $password = $request->post("password");
    // $password = $encrypt->encrypt_data($password);

    $data = [
        ["value" => $email, "class" => "Emailvalidation"],
        ["value" => $password, "class" => "Passwordvalidation"]
    ];
    $result = $register->create_account($data);
    if($result == 1){
        $login =  $login->login($email, $password);
        if($login == 1){
            $username = $session->get_session("name");
            $_SESSION['success'][] = "Welcome $username";
            $header->go_to("../index.php");
        }else{
            $session->set_session("email", $email);
            $_SESSION['errors'][] = $login;
            $header->go_to("../login.php");
        }
    }else {
        $session->set_session("email", $email);
        $session->set_session("errors", $result);
        $header->go_to("../login.php");
    }
}else {
    $header->go_to("../login.php");
}