<?php
    include('../module/sign_in_PHP.php');
?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>code-pencil</title>
    <link rel="stylesheet" href="../dist/css/semantic.min.css" />
    <link href="../dist/css/compiledBsv4.min.css" rel="stylesheet">
    <script src="../dist/js/formValidation/jquery-1.11.1.js"></script>

  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../index.php">code-pencil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

          </ul>
          <form class="">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="btn btn-outline-secondary" href="../Controller/codeController.php?req=editor">Editor
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                &nbsp;
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-secondary" href="../Controller/codeController.php?req=signup">Signup</a>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </header>

    <br>
    <br>
    <div class="container">
    <?php
      if(isset($_SESSION["NotLogin"]) === true)
      {
        echo '<div class="alert alert-danger" role="alert">
                Check you email or password
              </div>';
              //unset($_SESSION["NotLogin"]);
      }
    ?>
    <center>
    <div class="ui segments" style="top: 20px; margin-bottom: 20px">
    <div class="ui segment">
      <h4 class="ui header">Sign in</h4>
      </div>
      <div class="ui secondary segment">

        <form id="signupForm" action="" method="POST" class="ui grid form" style="padding: 10px">
         
        
          <div class="row field">
            <label class="six wide column" for="email">Email</label>
            <div class="eight wide column">
            <div class="ui input">
                <input id="email" name="email" type="email" placeholder="Email" onchange="checkAvailability()" />
                
              </div>  
              <span id="user-availability-status"></span>
            </div>
           
          </div>
      
          <div class="row field">
            <label class="six wide column" for="password">Password</label>
            <div class="eight wide column">
              <div class="ui input">
                <input id="password" name="password" type="password" placeholder="Password" />
              </div>
            </div>
          </div>
      
          
          <div class="row">
            <label class="six wide column"></label>
            <div class="eight wide column">
              <button id="submit" type="submit" class="ui primary button">Sign in</button>
            </div>
          </div>
        
        </form>

      </div>
    </div>
    </center>

    </div>
    <!-- /container -->
  </body>
  <script src="../dist/js/formValidation/jquery-1.11.1.js"></script>
  <script src="../dist/js/formValidation/sign.in.Script.js"></script>

  </html>