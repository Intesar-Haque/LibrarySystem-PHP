<?php    
if(isset($_POST['signup_submit'])){
    include_once 'db-inc.php';
    $uname = $_POST['signup_uname'];
    $pass = $_POST['signup_pass'];
    $email = $_POST['signup_email'];
    
    if(empty($uname)|| empty($email) || empty($pass)){
        header("Location: ../main.php?signup=failed");
        exit();
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../main.php?signup=failed");
        exit();
    } else{
        $sql = "SELECT email FROM users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../main.php?signup=failed");
            exit();
        } else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result > 0){
                header("Location: ../signup-form.php?email=$email&username=$uname");
                exit();
            } else{
                $sql = "INSERT INTO users (uname, email, pass) VALUES (?,?,?);";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../main.php?signup=failed");
                    exit();
                } else{
                    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $uname,$email,$hashedPass);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../main.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../main.php");
    exit();
}
