<?php 
session_start();

if(isset($_POST['borrow_submit'])){
    if(!isset($_SESSION['userEmail'])){
        header("Location: ../signup-form.php?borrow=error");
        exit();
    }
    include_once 'db-inc.php';
    $book_id = $_POST['book_id'];
    $email=$_SESSION['userEmail'];
 
    $sql = "SELECT email FROM user_bookslist WHERE book_id=? && email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../main.php?borrow=error");
        exit();
    } else{
        mysqli_stmt_bind_param($stmt, "ss", $book_id, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result = mysqli_stmt_num_rows($stmt);
        if($result > 0){
            header("Location: ../main.php?borrow=exists");
            exit();
        } else{
            $sql = "INSERT INTO user_bookslist (email, book_id) VALUES (?,?);";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../main.php?borrow=error");
                exit();
            } else{
                mysqli_stmt_bind_param($stmt, "ss", $email,$book_id);
                mysqli_stmt_execute($stmt);
                header("Location: ../main.php?borrow=success");
                exit();
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else{
    header("Location: ../main.php");
    exit();
}