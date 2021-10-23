<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container" style="margin-top:50px;pading:5px; width:500px">
    <h3 style="text-align:center">Enter Credentials</h3>
    <form action="includes/admin-verify.php" method="POST">
        <input type="text" class="form-control" placeholder="Username" style="margin-top:5px ;pading-top:5px;"  name="uname">
        <input type="password" class="form-control" placeholder="Password" style="margin-top:5px ;pading:5px" name="pass">
        <input type="submit" class="btn btn-success" value="Login" style="margin-top:5px ;pading:5px; text-align:center" name="verify">
    </form>
</div>