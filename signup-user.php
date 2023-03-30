<?php require_once "php/user-data.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign-up Page</title>
        <style>
            .error {
                color: red;
                margin-left: 5px;
            }
            label.error {
                display: inline;
            }
            </style>
 
 <link
 rel="stylesheet"
 href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
 integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
 crossorigin="anonymous"
 />
 <link rel="stylesheet" type="text/css" href="login.css" />
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrapcss" />
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign Up</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                        <span><a href="user.php" style="color: rgb(16, 229, 152);"><i class="fa fa-home"></i> </a></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form name="myForm" action="signup-user.php" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="email" id="email" name="email" required value="<?php echo $email ?>">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" id="password" name="password" required >
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Confirm password" id="cpassword" name="cpassword" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign-up" class="btn float-right login_btn" id="signup" name="signup">
                        </div>
                        <br>
                        <div> <p style="color: white; text-align: center;"> Already have an Account? <a href="login-user.php">Log-In</a></p> </div>
                        <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>