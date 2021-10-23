<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script> 
<script src="js/bootstrap.js"></script>

<form action="includes/reset-inc.php" method="POST">
  <div class="modal-dialog" role="document"> 
    <div class="modal-content">
        <div class="modal-header text-center"><h4 class="modal-title w-100 font-weight-bold">Reset Password</h4></div>
        <div class="modal-body mx-3">
            <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="email" name="reset_email" class="form-control" placeholder="Enter your email">
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button type="submit" name="reset_submit" class="btn btn-success pl-5 pr-5" style="padding: 10px;">Send Code</button>
        </div>
    </div>
  </div>
</div>
</form>