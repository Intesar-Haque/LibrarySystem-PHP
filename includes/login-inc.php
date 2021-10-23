<?php    
if(isset($_POST['login_submit'])){
    include_once 'db-inc.php';
    $pass = $_POST['login_pass'];
    $email = $_POST['login_email'];
    
    $sql = "SELECT * FROM users WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../main.php?login=failed");
        exit();
    } else{
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($pass,$row['pass']);
            if($pwdCheck==true){
                session_start();
                $_SESSION['userName'] = $row['uname'];
                $_SESSION['userEmail'] = $row['email'];
                header("Location: ../main.php?success");
                exit();
            } else{
                header("Location: ../login-form.php?login=invalid");
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
    header("Location: ../main.php");
    exit();
}
