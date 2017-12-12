<?php
    include('../module/signupPHP.php');
?>

  <!doctype html>
  <html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>code-pencil</title>
    
    <link rel="stylesheet" href="../dist/css/semantic.min.css" />
    <link href="../dist/css/compiledBsv4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    

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
          <form class="form-inline mt-2 mt-md-0">
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
                <a class="btn btn-outline-secondary" href="../Controller/codeController.php?req=signin">Signin</a>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </header>

    <br>
    <br>



    <div class="container">

      <form class="form-signin" name="registration" action="" method="POST">
        <h2 class="form-signin-heading">Sign up</h2>

        <input type="text" id="username" name="username" class="form-control" placeholder="username" required autofocus>
        <input type="password" id="Password" name="Password" class="form-control" placeholder="Password" required autofocus>
        <input type="password" id="confirm_pass" name="confirm_pass" class="form-control" placeholder="Confirm Password" required autofocus>

        <br>
        
        <button class="btn btn-lg btn-warning btn-block" type="submit">Sign up</button>
      </form>
      <script src="../dist/js/formValidation/script.js"></script>
      <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    </div>
    <!-- /container -->
  </body>

  </html>