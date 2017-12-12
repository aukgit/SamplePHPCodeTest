<?php
    include('../module/signinPHP.php');
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

      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">Sign in</h2>

        <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="email" onBlur="checkAvailability()" required autofocus>
        <span id="user-availability-status"></span>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
    <!-- /container -->
  </body>
 
  <script>
    
    function checkAvailability() {

jQuery.ajax({
url: "../api/check_availability.php",
data:'email='+$("#inputEmail").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);

},
error:function (){}
});
}
  
  </script>

  </html>