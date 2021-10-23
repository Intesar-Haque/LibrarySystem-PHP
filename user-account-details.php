<?php
 require "header.php";
 include_once 'includes/db-inc.php';
?>
<br>
<style>
.nav-tabs .nav-link {
  color:green;
}

</style>
<ul class="nav nav-tabs" style="padding-top:10px">
  <li class="nav-item">
    <a class="nav-link " href="user-account.php">Collection</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="user-account-details.php">Account Details</a>
  </li>
</ul> 

<div class='container' style="margin:50px; width:50%; margin-top:0px">
    <br>
    Username
    <input type="text" class="form-control" value="<?php echo $_SESSION['userName'] ?>" readonly>
    <br>
    Email
    <input type="text" class="form-control" value="<?php echo $_SESSION['userEmail'] ?>" readonly>
    <br>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deactivateConfirm">
        Deactivate Account
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="deactivateConfirm" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deactivateConfirmTitle">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Once deactivated, all books from collection will be removed.
        This action cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#deactivateConfirm2">DEACTIVATE ACCOUNT</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deactivateConfirm2" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deactivateConfirmTitle">Enter password to confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="includes/deactivate-inc.php" method="POST">
        <div class="modal-body">
            <input type="password" name="pass" class="form-control" placeholder="Enter password"> 
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-danger" name="deactivate_submit" value="DEACTIVATE ACCOUNT">
        </div>
      <form>
    </div>
  </div>
</div>


