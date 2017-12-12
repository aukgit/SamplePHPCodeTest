<?php 
require_once("functions.php");

if (isLoggedIn()) {
    redirectToPage("home");
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>News Portal : Login</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="page login-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <h1 class='header-page'>Login Page : News Portal</h1>
        </header>

        <form action="login.php" method="post">
            <label for="username">Username : </label>
            <input type="text" name="username" placeholder="Username"> <br>

            <label for="password">Password : </label>
            <input type="password" name="password" placeholder="password" > <br>
            <input type="submit" value="Login">
        </form>
        <?php
        if ($_POST != null) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = getUser($username, $password);
            // printAnything($user);
            if(count($user) > 0){
                createSession($user);
                redirectToPage("addnews");
            }
            

        }

        ?>

        <script src="script.js"></script>
      

    </body>
</html>