<?php require_once "php/user-data.php";
include "go.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>

    <link rel="stylesheet" type="text/css" href="login.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrapcss" />
</head>

<body>
    <div class="main-div">
        <div class="nav justify-content-center" id="menu">
            <li class="nav-item">
                <a class="nav-link active" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus1.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq1.php">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="url-show.php">URLs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout-user.php">LogOut</a>
            </li>
        </div>
        <br>
        <div class="header">
            <img src="Scissor.png">
            <h1><u>The URL Shortener!!</u></h1>
        </div>
        <br>
        <h1 style="font-size: 40px; position: absolute; top: 250px; left:300px; color: white;"><u><i>About Us</i></u></h1>
        <br>
        <br>
        <br>
        <p style="color: rgb(16, 200, 100); text-align:center; position:relative; top: 100px;">
            This is a link management platform that lets you harness the power of your links by shortening, sharing, managing and customizing your links to your liking and content.
            <br>
            Trim! uses PHP server for the fastest possible redirects. The front end is built using HTML and CSS,  it uses MD5 algorithm for for generating shortened URLs and MySQL database for storing the shortened and original urls.
        </p>
        <p style="color: white; text-align:center; position:relative; top: 120px;">
            <b>The project is built by <br>Raunak Raj - 20BCE2948 <br> and <br> Ananya Singh - 20BCE0785 <br> under the guidance of <br> Dr.Arun Kumar G <br>for the course CSE3002 - Internet and Web Programming</b>
        </p>
    </div>
    <script src="script.js"></script>
</body>

</html>