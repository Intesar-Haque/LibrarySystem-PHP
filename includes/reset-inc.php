<?php
if(isset($_POST['reset_submit'])){
    include_once 'db-inc.php';
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "http://library-system.great-site.net/new-password-form.php?selector=".$selector."&validator=".bin2hex($token);
    $expires = date("U") + 1800;
    $email = $_POST['reset_email'];
    $sql = "DELETE FROM pass_reset WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was a problem";
        exit();
    } else{
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
    }
    $sql = "INSERT INTO pass_reset (email, selector, token, expires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was a problem";
        exit();
    } else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $token, $expires);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);

    $to = $email;
    $subject = 'Reset your password';
    $message = '<p>Here is the link for password reset :
        <a href="'.$url.'">'.$url.'</a></p>';
    $headers = "From: library-system <intesarhq96b@gmail.com>\r\n";
    $headers.= "Reply-To: intesarhq96@gmail.com\r\n";
    $headers.= "Content-type: text/html\r\n";
    mail($to, $subject, $message, $headers);
    header("Location: ../reset-form.php?reset=success");


} else{
    header("Location: ../main.php?error");
}