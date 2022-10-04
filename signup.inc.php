<?php
if (isset($_POST['sign_submit'])) {
    require 'con1.php';


    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pwd = $_POST['password'];

    if (empty($username) || empty($email) || empty($phone) || empty($pwd)) {
        header("location:signpage.php?error=emptyfields&username=" . $username . "&email=" . $email);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:signpage.php?error=invalidemail&username=" . $username);
        exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $username)) {
        header("location:signpage.php?error=invalidusername&email=" . $email);
        exit();
    } elseif (!preg_match("/^[0-9]*$/", $phone)) {
        header("location:signpage.php?error=invalidphone=" . $phone);
        exit();
    } else {
        $sql = "SELECT username FROM  userinfo WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location:signpage.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);

            if ($resultcheck > 0) {
                header("location:signpage.php?error=usertaken&email=" . $email);
                exit();
            } else {

                $sql = "INSERT INTO userinfo(username,email,phone,password) VALUES(?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location:signpage.php?error=sqlerror");
                    exit();
                } else {
                    // $hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssis", $username, $email, $phone, $pwd);
                    $success = mysqli_stmt_execute($stmt);
                    header("location:signpage.php?signup=success");
                    header("location:operate.php");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
