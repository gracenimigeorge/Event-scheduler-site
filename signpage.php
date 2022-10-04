<?php
include_once 'signup.inc.php';
?>
<html>

<head>

</head>

<style>
    body {
        background: url(img/signuppage_img.jpg);
        background-size: cover;
    }

    .one {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        padding: 30px 21px;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 205px;
    }

    .one h1 {
        text-align: center;
    }
</style>

<body>

    <div class="one">

        <h1>SIGNUP</h1>

        <form action="signup.inc.php" method="POST">

            <label>&nbsp;&nbsp;&nbsp;Username&nbsp; </label>

            <input type="text" name="username" placeholder="" value=""><br><br>

            <label>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>

            <input type="email" name="email" placeholder=""><br>
            <br>
            <label>&nbsp;&nbsp;&nbsp;Phone &nbsp; &nbsp;&nbsp; &nbsp;</label>

            <input type="number" name="phone" placeholder=""><br><br>

            <label>&nbsp;&nbsp;&nbsp;Password&nbsp;&nbsp;</label>

            <input type="password" name="password" placeholder=""><br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" placeholder="submit" name="sign_submit">
        </form>
    </div>
    <button><a href="loginpage.php">BACK</a></button>
</body>

</html>