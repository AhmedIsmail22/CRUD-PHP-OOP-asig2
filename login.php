<?php
require_once 'App.php';
$_SESSION['title'] = "Login Page";
require_once 'inc/header.php';
require_once 'inc/navbar.php';
?>
<div class="container d-flex justify-content-between align-items-center mt-2">
    <form action="handle/login.php" method="POST" class="p-5 w-50">
        <h1 class="font-weight-bold text-primary">Login</h1>
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
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" name="email" placeholder="Enter email" value = "<?php if($session->isset_session('email')) echo $session->get_session("email"); $session->unset_session('email'); ?>" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <input type="submit" class="btn btn-primary" name="login" value="Login"/>
        <p class="text-secondary">I haven't account ! <a class="text-primary font-weight-bold" href="register.php">register</a> </p>
      </form>
     <div class="login-img w-50 h-100">
        <img class="w-100 h-100" src="images/login.png" alt="Login image" />
     </div>
    </div>

  <?php
    require_once 'inc/footer.php';
  ?>