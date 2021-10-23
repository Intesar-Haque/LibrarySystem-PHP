<?php 
if(isset($_GET['login'])|| isset($_GET['set'])){
  echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script> 
        <script src="js/bootstrap.js"></script>';
} else{
  echo '<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
}
?>
<script src="js/login-script.js"></script>
<form role="form" id="loginForm" action="includes/login-inc.php" method="POST">

  <div class="modal-dialog" role="document"> 
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
        <?php 
        if(!isset($_GET['set']) && !isset($_GET['login'])){
          echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>';
        }?>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" name="login_email" class="form-control" placeholder="Email">
        </div>
        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="login_pass" class="form-control" placeholder="Password">
        </div>
        <?php
        if(isset($_GET['login']) && ($_GET['login']=='invalid')){
            echo '<div style="color:Red;">Invalid Email or Password</div>' ;
        }?>
        <div class="md-form mb-5"><a href="reset-form.php?set=1">Forgot Password?</a></div>
        <?php
        if(isset($_GET['set']) || isset($_GET['login'])){
            echo '<div class="md-form mb-5" style="padding-top:0px"> Don\'t have an account? click <a href="signup-form.php?set=1">here </a> to signup</div>' ;
        }?>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="login_submit" class="btn btn-success pl-5 pr-5" style="padding: 10px;">Login</button>
      </div>
    </div>
  </div>
</div>
</form>