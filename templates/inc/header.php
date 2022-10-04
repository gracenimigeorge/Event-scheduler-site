<!DOCTYPE html>
<html>

<head>
    <title>EventO</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        .im {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-success shadow-sm fixed-top">
            <div class="container d-flex justify-content-between">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <!-- <img src="/img/logo.jpeg" class="im" alt="logo"> -->
                    <strong>Logo</strong>
                </a>
                <!-- <div style = "position:relative;left:300px;top:0.5px;">           -->
                <a class="btn btn-light" href="newEvent.php">Add New Event</a>
            </div>
            <a class="btn btn-light" href="loginpage.php">Logout</a>
        </div>
        </div>
    </header>
    <?php displayMessage(); ?>