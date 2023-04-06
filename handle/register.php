<?php

require_once '../App.php';



if($request->hasPost($request->post("signup"))){
    $name = $request->post("name");
    $email = $request->post("email");
    $phone = $request->post("phone");
    $password = $request->post("password");

    $data = [
        ["value" => $name,"class" => "Namevalidation"],
        ["value" => $email,"class" => "Emailvalidation"],
        ["value" => $phone,"class" => "Phonevalidation"],
        ["value" => $password,"class" => "Passwordvalidation"]
    ];
    $result = $register->create_account($data);
    if($result == 1){
        $password = $encrypt->encrypt_data($password);
        $stm = $conn->prepare("INSERT INTO users (name, email, phone, password) VALUES (:name, :email, :phone, :password)");
        $stm->bindParam(':name', $name);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':phone', $phone);
        $stm->bindParam(':password', $password);

        $out = $stm->execute();

        if($out){
            $session->set_session('success', ['Insert is successfully.']);
            $header->go_to("../login.php");
        }else {
            $session->set_session('name', $name);
            $session->set_session('email', $email);
            $session->set_session('phone', $phone);
            $session->set_session('password', $password);
            $session->set_session('errors', ['Insert is Failed.']);
            $header->go_to("../register.php");
        }
    }else{
        $session->set_session('name', $name);
        $session->set_session('email', $email);
        $session->set_session('phone', $phone);
        $session->set_session('password', $password);
        $session->set_session('errors', $result);
        $header->go_to("../register.php");
    }
}else {
    $header->go_to("../register.php");
}