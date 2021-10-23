<?php
session_start();
    if(isset($_SESSION['adminName'])){
        if($_SESSION['adminCode']=="zKx2hGmbM6GF2Rm2ecLCypUB82jTLL7qCWdUdueF"){
?>
<head> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script> 
    <title>Admin</title>
</head>
<body style="margin-top: 50px; background-color:lightgrey">
<div class="container-fluid">
<div class="card d-inline-flex" style="width: 500px;">
    <div class="card-header">Add Book</div>
    <div class="card-body">
    <form action="includes/insert-inc.php" enctype="multipart/form-data" method="POST">
        <input type="text" class="form-control" name="book_name" placeholder="Book Name"><br>
        <input type="text" class="form-control" name="author" placeholder="Author Name"><br>
        <input type="text" class="form-control" name="year" placeholder="Publish Year"><br>
        <input type="text" class="form-control" name="genre" placeholder="Genre"><br>
        <input type="text" class="form-control" name="book_desc" placeholder="Description"><br>
        <input type="file" class="form-control" name="img_link" placeholder="Image Link"><br>
        <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-success">Add Book</button></div>
    </form>  
    </div>  
</div>
<div class="card d-inline-flex" style="width: 500px;">
    <div class="card-header">Remove Book</div>
    <div class="card-body">
    <form action="includes/delete-inc.php" method="POST">
        <input type="text" class="form-control" name="book_name" placeholder="Book Name"><br>
        <input type="text" class="form-control" name="author" placeholder="Author Name"><br>
        <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-danger">Delete Book</button></div>
    </form>  
    </div>  
</div>
</div>
</body>
<?php 
} else{
    header("Location: main.php");
    exit();
}
} else{
       header("Location: main.php");
}
?>