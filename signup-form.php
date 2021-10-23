<?php 
if(isset($_GET['username'])||isset($_GET['email'])){
  $email = $_GET['email'];
  $uname = $_GET['username'];
  echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script> 
        <script src="js/bootstrap.js"></script>';
} else if(isset($_GET['borrow']) || isset($_GET['set'])){
  echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script> 
  <script src="js/bootstrap.js"></script> ';
  if($_GET['borrow']!="error"){
    echo '<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
  }
} else{
  echo '<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
}
?>
<script src="js/signup-script.js"></script>
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
      <?php 
        if(!isset($_GET['username'])&&!isset($_GET['email'])){
            if(isset($_GET['borrow']) && ($_GET['borrow']!="error")){
                echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            }
        }
      ?> 
    </div>
    <div class="modal-body mx-3">
      <form role="form" id="signupForm" action="includes/signup-inc.php"  method="POST">
      <div class="md-form mb-5">
        <i class="fas fa-user prefix grey-text"></i>
        <input type="text" name="signup_uname" id="signup_uname" class="form-control" placeholder="Username" require 
        <?php if(isset($_GET['username'])){ echo 'value="'.$uname.'"';}?>">
      </div>
      <div class="md-form mb-5">
        <i class="fas fa-envelope prefix grey-text"></i>
        <input type="email" name="signup_email" id="signup_email" class="form-control" placeholder="Email">
      </div>

      <div class="md-form mb-5">
        <i class="fas fa-lock prefix grey-text"></i>
        <input type="password" name="signup_pass" id="signup_pass" class="form-control" placeholder="Password">
      </div>

      <div class="md-form mb-5">
        <i class="fas fa-lock prefix grey-text"></i>
        <input type="password" name="signup_cpass" id="signup_cpass" class="form-control" placeholder="Confirm Password">
      </div>
      <?php
        if(isset($_GET['email'])){
          echo '<div class="md-form mb-5" style="color:Red">'.$email.' already exists, click <a href="reset-form.php">here </a>to recover</div>' ;
        } else if(isset($_GET['borrow']) || isset($_GET['set'])){
          echo '<div class="md-form mb-5" style="padding-top:0px"> Already have an account? click <a href="login-form.php?set=1">here </a> to login</div>' ;
        }
      ?>
    </div>
    <div class="modal-footer d-flex justify-content-center">
      <button type="submit" name="signup_submit" class="btn btn-success pl-5 pr-5" style="padding: 10px;">Sign up</button>
    </div>
    </form>
  </div>
</div>
</div>
