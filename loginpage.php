<?php
#include_once 'login.inc.php';
?>

<html>

<head>
    <meta-character="utf-8">
        <title>Event Scheduler</title>
</head>


<style>
    body {
        /* margin: 179px; */
        padding: 0;
        font-family: monospace;
        background-size: cover;
        background-origin: border-box;
        text-align-last: center;
        display: flex;
        justify-content: center;
        text-align: center;

    }

    /* .box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: rgba(0, 0, 0, 0.20);
        padding: 30px 30px 30px 30px;
        border-radius: 370px;

    } */

    h1 {
        font-family: serif;
        font-display: auto;
        color: black;
        text-align: center;
        margin-left: 78px;
        font-size: 35px;
    }

    label {
        font-family: cursive;
        color:purple;
    }

    .box .input[type=text] {
        position: relative;
        font-size: 18px;
        color: none;
    }

    .box .inputbox input {
        width: 60%;
        padding: 5px 20px;
        font-size: 18px;
        margin: 8px 0;
        border-radius: 4px;
        outline: none;
        background: transparent;
        color: aliceblue;
    }

    .box .signup input {
        font-family: serif;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(+50%, -50%);
        width: 400px;
        align-content: center;
        background: rgba(0, 0, 0, 0.2);
        color: darkgoldenrod;
    }

    .sub button {
        border: 2px solid #0072ff;
        margin-left: 76px;
        width: 120px;
        height: 43px;
        border-radius: 23px;
        font-weight: bolder;
        background-color: #00ffa1f2;
        cursor: pointer;
    }

    .sub a {
        font-size: large;
        font-weight: bolder;
        margin-left: 78px;

    }

    .hm a {
        font-size: large;
        font-weight: bolder;
        margin-left: 79px;
    }

    .con button {
        cursor: pointer;
        margin-left: 78px;
    }

    .inputbox input {
        border-radius: 8px;
    }
    .kon{
        height:100px;
    }
</style>

<body>


    <div class="kon">
    <h1>Login</h1>
    <br>
    <form action="" method="POST">

        <div class="inputbox">
            <label>Username&nbsp;</label>
            <input type="text" name="username" required="" placeholder=" ">
        </div><br>
        <div class="inputbox">
            <label>Password&nbsp;&nbsp;</label>
            <input type="password" name="password" required=" " placeholder=" ">
            <br>
            <br>
        </div>
        <div class="sub">
            <button type="submit" name="login_submit">sign in</button>
            <br>
            <br>
            <a href="signpage.php">NEW USER? SIGN UP</a><br>

        </div><br>
    </form>

    <!-- <div class="hm">
        <a href="index1.php"><mark>BACK TO HOMEPAGE</mark></a>
        <form action="index.php" method="POST">
    </div> -->
    </div>

</body>

</html>
<?php

if (isset($_POST['login_submit'])) {
    session_start();
    //get values
    $username = $_POST['username'];
    $_SESSION["username"] = $username;
    $password = $_POST['password'];
    //to prevent mysql injection
    $username = stripcslashes($username);

    $password = stripcslashes($password);
    $conn = mysqli_connect("localhost:3306", "root", "", "eventlister");
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    //connect to db n select db

    mysqli_select_db($conn, "eventlister");
    //query to db for user
    $query = "select * from userinfo where username='$username'and password='$password'";
    $result = mysqli_query($conn, $query)
        or die("failed to query database" . mysqli_error());
    $row = mysqli_fetch_array($result);

    if ($row['username'] == $username && $row['password'] == $password) {
        if ($username == 'ADMIN') {
            echo " Sucessfully Logged In as admin";
            header("Location: admin.php");
        } else {
            echo "login success as staff";
            header("Location:operate.php");
        }
    } else {
        echo "error";
        #echo "<script>window.open('index1.php');alert('Incorrect Password or Email ID');</script>";
        # echo "<script>window.location.replace('loginpage.php');alert('Incorrect Password or Email ID');</script>";
        # echo "<script>alert('Incorrect Password or Email ID')</script>";
    }
}

?>