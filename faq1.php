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
    <div class="main-div" style="position: relative; top: 20px;">
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
        <div class="faq">
          <h1 style="font-size: 40px; position: absolute; top: 250px; left:150px; color: white;"><u><i>Frequently Asked Questions</i></u></h1>
          <br>
          <br>
          <br>
          <h4>What does the URL Shortener do?</h4>
          <p>
            The URL Shortener! allows you to shorten your URLs, store, customize and share them more effectively and easily.
          </p>
          <h4>How is creating an account benificial?</h4>
          <p>
            Shortened URLs are stored permanently for a specific user.
          </p>
          <h4>Why is it better than other shortening services?</h4>
          <p>
          It is free, faster and open-source. You can also customise your URL.
          </p>
          <h4>What is the use of customising URLs?</h4>
          <p>
          It's Fancy, you can easily use the url and have a database of URLs from where you can easily identify and use a said URL.
          </p>
          <h4>Can a friend of mine have a same shortened URL generated?</h4>
          <p>
          No, The URL Shortener! generates a new shortened URL each time using the md5 algorithm.
          </p>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>