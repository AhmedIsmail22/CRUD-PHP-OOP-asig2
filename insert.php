<?php
require_once 'App.php';
$_SESSION['title'] = "Insert Page";
require_once 'inc/header.php';
?>
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center">
    <h1 class="text-primary font-weight-bold">Add Product</h1>
    <a href="index.php" class="btn btn-danger font-weight-bold">Back</a>
    </div>
<div class="container d-flex justify-content-between align-items-center">
    <form action="handle/create.php" method="POST" class="px-5 w-50">
        <?php
        if($session->isset_session("errors")){
            $message->error_msg($session->get_session("errors"));
            $session->unset_session('errors');
          }
          if($session->isset_session("success")){
            $message->success_msg($session->get_session("success"));
            $session->unset_session('success');
          }
        ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Product name</label>
            <input type="text" class="form-control" name="title"  placeholder="Enter Name" value = "<?php if($session->isset_session("product_title")) echo $session->get_session("product_title"); $session->unset_session("product_title"); ?>" />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Quantity</label>
            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value = "<?php if($session->isset_session("quantity")) echo $session->get_session("quantity"); $session->unset_session("quantity"); ?>"  />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Price</label>
            <input type="number" class="form-control" name="price" placeholder="Enter price"  value = "<?php if($session->isset_session("price")) echo $session->get_session("price"); $session->unset_session("price"); ?>"  />
        </div>
        <input type="submit" class="btn btn-primary" name="save" value="save"/>
      </form>
     <div class="login-img w-50 h-100">
        <img class="w-100 h-100" src="images/insert.jpg" alt="Login image" />
     </div>
    </div>

<?php
require_once 'inc/footer.php';
?>