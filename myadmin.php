<?php
include("./assets/template/header1.php");



?>
<main>
        <div class="container mt-5">
        <form class="form-signin" action="process_myadmin.php" method="post">
            
            <h1 class="h3 mb-3 font-weight-normal">Please sign in My Admin</h1>
            <label for="inputEmail" class="sr-only">My Admin</label>
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