<?php
  session_start();
?>
<html>
<head> 
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script> 
    <script src="js/bootstrap.js"></script> 
    <title>Library System</title>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"> 
    <a class="navbar-brand " href="main.php">Library System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class=" form-inline mr-auto" action="main.php" method="GET">
      <div class="input-group">
        <input type="search" class="form-control mt-4" name="search"  placeholder="Search" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-success mt-4" type="submit">Search</button>
        </div>  
        </div>  
      </form>
    <?php
      if(!isset($_SESSION['userName'])){
        echo '<ul class="navbar-nav">
              <li class="nav-item"> 
              <a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Login</a>
              </li>
              <li class="nav-item">
              <a href="" class="nav-link" data-toggle="modal" data-target="#modalRegisterForm">Signup</a>
              </li>
              </ul>';
      } else{
        echo '<ul class="navbar-nav">
              <li class="nav-item"> 
              <a href="user-account.php" class="nav-link">Account</a>
              </li>
              <li class="nav-item">
              <a href="includes/logout-inc.php" class="nav-link">Logout</a>
              </li>
              </ul>';
        }
    ?>  
    </div> 
  </nav>
</header>
<br><br><br><br>