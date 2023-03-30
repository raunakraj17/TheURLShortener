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
      <div class="wrapper">
        <h6>Put Your Long URL below:</h6><br><br>
        <form action="#">
          <input type="text" name="full_url" placeholder="Enter or paste a long url" required>
          <i class="url-icon uil uil-link"></i>
          <button>Shorten</button>
        </form>
      </div>
    </div>
    
    <div class="blur-effect"></div>
    <div class="popup-box">
      <div class="info-box">Your short link is ready. You can also edit your short link now but can't edit once you saved it.</div>
      <form action="#" autocomplete="off">
        <label>Edit your shorten url</label>
        <input type="text" class="shorten-url" required>
        <i class="copy-icon uil uil-copy-alt"></i>
        <button>Save</button>
      </form>
    </div>
    <script src="script.js"></script>
  </body>
  </html>