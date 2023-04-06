<?php
require_once 'App.php';
$_SESSION['title'] = "Home Page";
require_once 'inc/header.php';
require_once 'inc/navbar.php';

if(!$session->isset_session("user_id")){
  header("location: login.php");
}else{
  if($session->isset_session("success")){
    $message->success_msg($session->get_session("success"));
    $session->unset_session('success');
  }
  if($session->isset_session("errors")){
    $message->error_msg($session->get_session("errors"));
    $session->unset_session('errors');
  }
}

$data = $selectall->select_all();
?>

<div class="container mt-5">
<div class="d-flex justify-content-between align-items-center pb-5">
<h1 class="text-primary">All Users</h1>
<a href="insert.php" class="btn btn-success">Add Product</a>
</div>
<table class="table table-striped text-center">
    <thead>
      <tr class="bg-dark text-light">
          <th scope="col">#</th>
          <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $id = 0;
        foreach($data as $item){
          $id++;
          ?>
            <tr>
              <th scope="row"><?=$id;?></th>
              <td><img class="pro-img" style=" width: 30px; height: 30px;" src="images/product.jpg" alt="user" class="user-image"></td>
              <td><?=$item['title']?></td>
              <td><?=$item['quantity']?></td>
              <td><?=$item['price']?></td>
              <td class="d-flex justify-content-center">
                <a class="btn btn-primary font-weight-bold mr-1" href="edite.php?id=<?=$item['id']?>">Edit</a>
                <a class="btn btn-danger font-weight-bold ml-1" href="handle/delete.php?id=<?=$item['id']?>">Delete</a>
              </td>
            </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
  <?php
require_once 'inc/footer.php';
?>