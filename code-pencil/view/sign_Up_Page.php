<?php
    include('../module/sign_up_PHP.php');
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



    <!-- <div class="container"> -->
  
  <center>
    <div class="ui segments" style="top: 20px; margin-bottom: 20px">
    <div class="ui segment">
      <h4 class="ui header">Sign Up</h4>
      </div>
      <div class="ui secondary segment">
        <form id="signupForm" action="" method="POST" class="ui grid form" style="padding: 10px">
         
          <div class="row field">
            <label class="six wide column" for="username">Username</label>
            <div class="eight wide column">
              <div class="ui input">
                <input id="username" name="username" type="text" placeholder="Username" />
              </div>
            </div>
          </div>
          <div class="row field">
            <label class="six wide column" for="email">Email</label>
            <div class="eight wide column">
              <div class="ui input">
                <input id="email" name="email" type="text" placeholder="Email" onChange="checkAvailability()" />
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
          <div class="row field">
            <label class="six wide column" for="confirm_password">Confirm password</label>
            <div class="eight wide column">
              <div class="ui input">
                <input id="confirm_password" name="confirm_password" type="password" placeholder="Confirm password" />
              </div>
            </div>
          </div>
          
          <div class="row">
            <label class="six wide column"></label>
            <div class="eight wide column">
              <button type="submit" id="submitButton" class="ui primary button">Sign up</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </center>
  
    <script src="../dist/js/formValidation/script.js"></script>
  
    <!-- </div> -->
    <!-- /container -->
  </body>

  </html>