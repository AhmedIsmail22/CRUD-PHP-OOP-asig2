<?php
require_once 'App.php';
$_SESSION['title'] = "Register Page";
require_once 'inc/header.php';
require_once 'inc/navbar.php';
?>
<div class="container d-flex justify-content-between">
    <form action="handle/register.php" method="POST" class="px-5 w-50">
        <h1 class="text-primary font-weight-bold">Register</h1>
        <?php
         if($session->isset_session('errors')){
            foreach($session->get_session("errors") as $error){
              ?>
                <div class="alert alert-danger"><?= $error ?></div>
              <?php
            }
            $session->unset_session('errors');
          }
        ?>
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter Name" value = "<?php if($session->isset_session('name')) echo $session->get_session("name"); $session->unset_session('name'); ?>" />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name="email" placeholder="Enter email" value = "<?php if($session->isset_session('email')) echo $session->get_session("email"); $session->unset_session('email'); ?>" />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="number" class="form-control" name="phone" placeholder="Enter phone number" value = "<?php if($session->isset_session('phone')) echo $session->get_session("phone"); $session->unset_session('phone'); ?>" />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <input type="submit" class="btn btn-primary" name="signup" value="Signup"/>
        <p class="text-secondary">I have account ! <a class="text-primary font-weight-bold" href="login.php">login</a> </p>
      </form>
     <div class="login-img w-50 h-100">
        <img class="w-100 h-100" src="images/register.png" alt="Login image" />
     </div>
    </div>

<?php
require_once 'inc/footer.php';
?>