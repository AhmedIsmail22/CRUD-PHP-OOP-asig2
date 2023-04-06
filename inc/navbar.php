
<nav class="navbar navbar-expand-lg navbar-light bg-info d-flex justify-content-between px-5">
        <a class="navbar-brand text-light font-weight-bold" href="index.php">CRUD APP</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
      <?php 
        if(isset($_SESSION['user_id']) && isset($_SESSION['name'])){
          ?>
          <h5 class="text-light px-5"><?=$_SESSION['name']?></h5>
          <div class="form-inline my-2 my-lg-0" id="navbarSupportedContent">
            <h5><a href="handle/logout.php" class="badge badge-danger font-weight-bold p-2">Logout</a></h5>
          </div>
          <?php }else{ ?>
            <div class="form-inline my-2 my-lg-0" id="navbarSupportedContent">
            <h5><a href="login.php" class="badge badge-primary font-weight-bold p-2">Login</a></h5>
          </div>
          <?php } ?>
        </div>
      </nav>