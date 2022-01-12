
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <form class="form-signin" action="process-login.php" method="post">
            
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                    <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }
                    ?>
                
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSignIn" >Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
        </form>
        </div>    
    </main>
<?php
include("./assets/template/footer.php");



?>