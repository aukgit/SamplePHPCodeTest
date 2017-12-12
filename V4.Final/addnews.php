<?php 
require_once("functions.php");

if (!isLoggedIn()) {
    redirectToLogin();
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
        <title>News Portal</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="page addnews-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
         <header>
            <h1 class='header-page'>Add New : News</h1>

            <div class="right">
            <?php
            createLoginOrLogoutButton();
            ?>        
            </div>
        </header>
      
        <form action="addnews.php" method="post" onsubmit="event.preventDefault();formSubmit(this);">
        <?php
        if ($_POST != null) {
            $headline = $_POST['headline'];
            $body = $_POST['body'];
            $priority = $_POST['priority'];
            createNews($headline, $body, $priority);
            echo "<h3 class='success' id='success'>Created news successfully.</h3>";

        }

        ?>
            <h3 class="placeholder" id="placeholder"></h3>
        
            <label for="headline">Headline : </label>
            <input type="text" name="headline" placeholder="Headline"> <br>

            <label for="body">Body : </label> 
            <textarea name="body" id="body" cols="30" rows="10"></textarea> <br>

            <label for="priority">Priority : </label>
            <input type="number" name="priority" placeholder="Priority"> <br>
            
            <input type="submit" value="Add News">
        </form>
   

        <script src="script.js"></script>
      

    </body>
</html>