<?php    
if(isset($_POST['deactivate_submit'])){
    
    session_start();
    include_once 'db-inc.php';
    $pass = $_POST['pass'];
    $email = $_SESSION['userEmail']; 
    $sql = "SELECT * FROM users WHERE email=?;";
    $stmt = mysqli_stmt_init($conn); 
    if(!mysqli_stmt_prepare($stmt, $sql)){ 
        header("Location: ../user-account-details.php");
        exit();
    } else{
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($pass,$row['pass']);
            if($pwdCheck==true){
                $sql = "DELETE FROM `users` WHERE email=?;";
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../user-account-details.php");
                    exit();
                } else{
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    session_start();
                    session_unset();
                    session_destroy();
                    header("Location: ../main.php");
                    exit();
                }
            } else{
                header("Location: ../user-account-details.php?invalid");
                exit(); 
            }
        } else{
            header("Location: ../user-account-details.php?invalid");
            exit();
        }
            
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else{
    header("Location: ../user-account-details.php");
    exit();
}
