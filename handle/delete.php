<?php



require_once '../App.php';


if($request->hasGet($request->get("id"))){
    $id = $request->get("id");

    $exist = $selectone->select_one('crud', $id);
    if($exist == 0){
        $session->set_session('errors', ["this user not exist."]);
        $header->go_to("../index.php");
    }else {
        $isdeleted = $delete->delete('crud', $id);
        if($isdeleted){
            $session->set_session('success', ["User is deleted."]);
            $header->go_to("../index.php");
        }else{
            $session->set_session('errors', ["Errors."]);
            $header->go_to("../index.php");
        }
    }
}