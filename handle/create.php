<?php


require_once '../App.php';


if($request->hasPost($request->post("save"))){
    $title = $request->post("title");
    $quantity = $request->post("quan$quantity");
    $price = $request->post("price");

    $valid = [
        ['value' => $title, 'class' => 'Namevalidation'],
        ["value" => $quantity, "class" => "RequiredData"],
        ["value" => $price, "class" => "RequiredData"]
    ];

    $result = $validation->valide($valid);
    if($result == 1){
        $stm = $conn->prepare("INSERT INTO crud(title, img,  quantity, price) VALUES(:title, 'image', :quantity, :price)");
        $stm->bindParam(':title', $title);
        $stm->bindParam(':quantity', $quantity);
        $stm->bindParam(':price', $price);
        $out = $stm->execute();
        if($out){
            $session->set_session("success", ["Product is inserted."]);
            $header->go_to("../insert.php");
        }else {
            $session->set_session("product_title", $title);
            $session->set_session("quantity", $quantity);
            $session->set_session("price", $price);
            $session->set_session("errors", ["Error."]);
            $header->go_to("../insert.php");
        }
    }else {
            $session->set_session("product_title", $title);
            $session->set_session("quantity", $quantity);
            $session->set_session("price", $price);
            $session->set_session("errors", $result);
            $header->go_to("../insert.php");
    }
   
}else {
    $header->go_to("../index.php");
}