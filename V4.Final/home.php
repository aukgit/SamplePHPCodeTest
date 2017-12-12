<?php 
require_once("functions.php");
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
    <body class="page home-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <h1 class='header-page'>Home Page : News Portal</h1>

            <div class="right">
            <?php
                createLoginOrLogoutButton();
            ?>        
            </div>
        </header>
        <?php
            $breakingNews = getBreakingNews();
            $generalNews = getGeneralNews();

            // printAnything($breakingNews);
            // printAnything($generalNews);
            // printAnything($TABLE_NEWS_COLUMS);
            echo "<ul class='breaking-news news-collection'>";
            $count = count($breakingNews);

            for ($i=0; $i < $count ; $i++) { 
                # code...
                $news = $breakingNews[$i];
                $headline = $news['headline'];
                $priority = $news['priority'];
                $body = $news['body'];
                echo "<li class='breaking-news-item news-item'><h3>$headline</h3><h4>Priority : $priority</h4><h4  class='body'>$body</h4></li>";
            }
           

            echo "</ul>";

            echo "<ul class='general-news news-collection'>";
            $count = count($generalNews);

            for ($i=0; $i < $count ; $i++) { 
                # code...
                $news = $generalNews[$i];
                $headline = $news['headline'];
                $body = $news['body'];
                // $priority = $news['priority'];
                echo "<li class='general-news-item news-item'><h3>$headline</h3><h3 class='body'>$body</h3></li>";
            }
           

            echo "</ul>";
        ?>



        <script src="script.js"></script>
      

    </body>
</html>

