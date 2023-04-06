<?php
require_once 'App.php';
$_SESSION['title'] = "Edit User";
require_once 'inc/header.php';
?>

<div class="container mt-2">
    <div class="d-flex justify-content-between align-items-center">
    <h1 class="text-primary font-weight-bold">Update User</h1>
    <a href="index.php" class="btn btn-danger font-weight-bold">Back</a>
    </div>
<?php
if($request->hasGet($request->get("id"))){
  $id = $request->get("id");

  $row = $selectone->select_one("crud", $id);

  if($row == 0){
      ?>
        <div class="alert alert-danger text-center mx-auto mt-5 w-75 font-weight-bold">This user not exist.</div>
      <?php
  }else {
?>
      <div class="d-flex justify-content-between align-items-center">
       <form action="handle/update.php" method="POST" class="px-5 w-50">
        <?php
            if($session->isset_session("errors")){
              $message->error_msg($session->get_session("errors"));
              $session->unset_session("errors");
            }
            if($session->isset_session("success")){
              $message->success_msg($session->get_session("success"));
              $session->unset_session("success");
            }
        ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="<?= $row['title'];?>" />
                <input type="hidden"name="id"value="<?= $row['id'];?>" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input type="number" class="form-control" name="quantity"  placeholder="Enter Quantity" value="<?= $row['quantity'];?>" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" class="form-control" name="price"  placeholder="Enter Price" value="<?= $row['price'];?>" />
            </div>
            <input type="submit" class="btn btn-primary" name="save" value="Save" />
          </form>
         <div class="login-img w-50 h-50">
            <img class="w-100 h-100" src="images/update.jpg" alt="Login image" />
         </div>
       </div>
        </div>

<?php
} 
}
require_once 'inc/footer.php';
?>