<?php




require_once '../App.php';



if($request->hasPost($request->post("save"))){
    $id = $request->post("id");
    $title = $request->post("title");
    $quantity = $request->post("quantity");
    $price = $request->post("price");

    $data = [
        ["value" => $title, "class" => "Namevalidation"],
        ["value" => $quantity, "class" => "RequiredData"],
        ["value" => $price, "class" => "RequiredData"]
    ];
    $result = $validation->valide($data);

        if($result == 1){
            $stm = $conn->prepare("UPDATE crud SET title = :title, quantity = :quantity, price = :price WHERE id = :id");
            $stm->bindParam(":title", $title);
            $stm->bindParam(":quantity", $quantity);
            $stm->bindParam(":price", $price);
            $stm->bindParam(":id", $id);
            $out = $stm->execute();
            if($out){
                $session->set_session('success', ["Product is updated."]);
                $header->go_to("../edite.php?id=$id");
            }else {
                $session->set_session('errors', ['update is failed.']);
                $header->go_to("../edite.php?id=$id");
            }
        }else {
            $session->set_session('errors', $result);
            $header->go_to("../edite.php?id=$id");
        }


}