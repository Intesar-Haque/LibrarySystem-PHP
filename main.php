<?php
require "header.php";
require "login-form.php";
require "signup-form.php";
include_once 'includes/db-inc.php';
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
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#descriptionModal_<?php echo "$sl"; ?>">More Info</button>     
            </div> 
            <div class="modal fade" id="descriptionModal_<?php echo "$sl"; ?>" tabindex="-1" role="dialog" aria-labelledby="descriptionModal_<?php echo "$sl"; ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="<?php echo $sl; ?>"><?php echo $data[$sl]['book_name']; ?></h4><br>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                        <div class="modal-body"><?php echo "Published at ".$data[$sl]['date']."<br>".$data[$sl]['book_desc']; ?></div>
                        <form action="includes/borrow-inc.php" method="POST">
                            <input type="text" name="book_id" value="<?php echo $data[$sl]['Sl']; ?>" style="visibility:hidden">
                            <div class="modal-footer"><button type="submit" name="borrow_submit" class="btn btn-outline-success">Borrow</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    <?php
    }
}
if(isset($_GET['search'])){
    $search= $_GET['search'];
    $sql= "Select * From booklist WHERE book_name='$search' OR author='$search';";
} else{
    $sql= "Select * From booklist;";
}
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        $item = new Item();
        $sl=(int)$row['Sl'];
        $array[$sl]=$row; 
        $item->printItem($array,$sl);
            
    }  
} else{
    echo "No Result Found";
}
if(isset($_GET['borrow'])){
    if($_GET['borrow']=="exists"){
        echo '<script>alert("Book already exists in inventory")</script>'; 
    } else if($_GET['borrow']=="success"){
        echo '<script>alert("Book added inventory")</script>'; 
    } else{
        echo '<script>alert("Error Occured, Try again later")</script>'; 
    }
}
?>
