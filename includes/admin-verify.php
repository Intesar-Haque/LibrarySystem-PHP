<?php
if(isset($_POST['verify'])){
    include_once 'db-inc.php';
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM admin_user WHERE uname=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../admin-account.php?login=failed");
        exit();
    } else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($password,$row['pass']);
            if($pwdCheck==true){
                session_start();
                $_SESSION['adminName'] = $row['uname'];
                $_SESSION['adminCode'] = "zKx2hGmbM6GF2Rm2ecLCypUB82jTLL7qCWdUdueF";
                header("Location: ../admin-insert.php");
                exit();
            }
        } else{
            header("Location: ../main.php");
            exit();
        }
            
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else{
    header("location: ../main.php");
}