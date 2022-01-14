<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href="./assets/img/mail_black.png" type="image/x-icon" >
    <title>Gmail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="./assets/css/styleone.css">
    <link rel="stylesheet" href="./assets/css/signin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

</head>

<body>
    <div id="header">
        <div class="h-left">
            <a href="index.php">
                <img src="./assets/img/image-0724023449749.jpg" alt="" />
            </a>

            <a href="index.php"  class="text-decoration-none"><span class="text-muted fs-4 text-decoration-none"> Gmail</span></a>
        </div>
        <div class="h-right">
            <a class="button
           
           
           
           button--low
          
           button--mobile-after-hero-only
          " href="" data-action="for work" data-category="cta" data-label="header">Dành cho công việc</a>
            <a class="button
           
           
           
            button--medium
           
            button--mobile-before-hero-only
           " href="login.php" data-action="sign in" data-category="cta" data-label="header">Đăng nhập</a>
            <a class="button
           
           
           
            button--mobile-after-hero-only
           " href="signup.php" data-action="sign in" data-category="cta" data-label="header">Tạo tài khoản</a>

        </div>

    </div>
    <main>
        <div class="container mt-5">
        <form class="form-signin" action="process-signup.php" method="post">
            
            <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
            <label for="txtUser" class="sr-only">Name</label>
            <input type="text" id="txtName" name="txtUser" class="form-control" placeholder="Full Name" required autofocus>
            <label for="txtUser" class="sr-only">Username</label>
            <input type="text" id="txtUser" name="txtUser" class="form-control" placeholder="Username" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="txtPass1" class="form-control" placeholder="Password" required>
            <label for="inputRetypePassword" class="sr-only">Retype Password</label>
            <input type="password" id="inputRetypePassword" name="txtPass2" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                
                    <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }
                    ?>
                
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSignIn" >Sign up</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
        </div>    
    </main>
<?php
include("./assets/template/footer.php");



?>