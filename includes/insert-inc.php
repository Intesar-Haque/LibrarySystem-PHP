<?php    
include_once 'db-inc.php';

$book_name = $_POST['book_name'];
$author = $_POST['author'];
$date = $_POST['year'];
$genre = $_POST['genre'];
$img_link = $_POST['img_link'];
$book_desc = $_POST['book_desc'];

echo $genre;

$sql = "INSERT INTO `booklist`(`book_name`, `author`, `date`, `genre`, `img_link`, `book_desc`) 
VALUES ('$book_name','$author','$date','$genre','$img_link','$book_desc');";

mysqli_query($conn,$sql);

header("Location: ../admin-insert.php");
