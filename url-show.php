<?php require_once "php/user-data.php"; ?>

<?php include "go.php" ?>


<!DOCTYPE html>
<html>

<head>
    <title>Trimmered URLs</title>

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
        <h1 style="font-size: 40px; position: absolute; top: 50px; left:200px; color: rgb(16, 200, 100);"><u><i>TRIMMED URLs!!</i></u></h1>
    <?php
    $sql2 = mysqli_query($conn, "Select * from url order by id desc");
    if(mysqli_num_rows($sql2)>0){
        ?>
        <div class="urls-area" style="position: relative; top: 50px;">
        <table id="urltable" style="color:rgb(67, 150, 71);">
            <div class="title">
                <tr>
                <th><u>Shorten URL</u></th>
                <th><u>Original URL</u></th>
                <th><u>Action</u></th>
                </tr>
            </div>
        </div>
    <?php
        while($row = mysqli_fetch_assoc($sql2)){
            ?>
            <div class="data">
                <tr>
                <td><a href=<?php echo 'http://localhost/iwp/go.php?u='.$row['shorten_url']; ?> target="_blank"><?php 
                    echo 'localhost/iwp/go.php?u='.$row['shorten_url'];
                ?></a> </td>
                <td><a href=<?php echo $row['full_url'] ?> target="_blank"><?php 
                    if(strlen($row['full_url'])>65){
                        echo substr($row['full_url'],0,65).'....';
                    }
                    else{
                        echo $row['full_url'];
                    }
                ?></a> </td>
                <td ><a href="php/delete.php?id=<?php echo $row['shorten_url']?>">Delete</a></td>
                </tr>
            </div>
            <?php
        }
    }
    ?>
    </div>
</body>

</html>