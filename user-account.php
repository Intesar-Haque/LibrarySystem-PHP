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
    <a class="nav-link active" href="user-account.php">Collection</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="user-account-details.php">Account Details</a>
  </li>
</ul> 
<div class='container'>
<?php
class Item {
    public $dir='img/books/';
    public function printItem($data,$sl){ 
    ?>
    <div class ="card d-inline-flex" style="width:300px; margin-top:20px">
        <div class="card-header">
            <h4 class="card-title"><?php echo $data[$sl]['book_name']; ?></h4>
            <h6 class="card-subtitle"><?php echo $data[$sl]['author']; ?></h6>
        </div>
        <div class="card-body">
            <img class="rounded mx-auto d-block" src="<?php echo $this->dir.$data[$sl]['img_link']?>" style="width:200px; height:300px">
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <form action="pdf-viewer.php" method="POST">
                <input type="hidden" name="sl" value="<?php echo $sl; ?>">
                <button type="submit" name="read" class="btn btn-outline-dark">Read</button> 
            </form>       
        </div>                 
    </div>
    <?php
    }
} ?>
</div>
<?php
if(isset($_GET['search'])){
    $search= $_GET['search'];
    $sql= "Select * From booklist WHERE book_name='$search' OR author='$search';";
} else{
    $email=$_SESSION['userEmail'];
    $sql= "Select * From user_bookslist WHERE `email` = '$email';";
}
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0){   
    while($row = mysqli_fetch_assoc($result)){
        $sl=(int)$row['book_id'];
        $sql= "Select * From booklist WHERE `Sl` = '$sl' ;";
        $result2 = mysqli_query($conn, $sql);
        $arr = mysqli_fetch_assoc($result2);
        $item = new Item();
        $sl=(int)$arr['Sl'];
        $array[$sl]=$arr; 
        $item->printItem($array,$sl);     
    }  
} else{
    echo "No Result Found";
}
?>
