<?php

  session_start();
  include('api/get_Code_List_At_Index.php');
    

?>

<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>code-pencil</title>
  <link rel="stylesheet" href="dist/css/semantic.min.css" />
  <link href="dist/css/compiledBsv4.min.css" rel="stylesheet">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">code-pencil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <ul class="navbar-nav">
            <!-- php code -->
            <?php include('view/nav/index_Nav.php');?>
          </ul>
        </form>
      </div>
    </nav>
  </header>

  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="dist/image/indeximage.jpeg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Editor</h1>
              <p></p>
              <p>
                <a class="btn btn-lg btn-primary" href="Controller/codeController.php?req=editor" role="button">Get Started</a>
              </p>
            </div>
          </div>
        </div>


      </div>

    </div>


    <!-- <div class="card">
    <div class="card-body">
      <div class="container marketing"> 
         <div class="row">  -->
          <?php include('view/nav/index_User_Data_List.php');?>

        <!-- </div>
      </div>
    </div>
    </div> -->
    <!-- /.container -->


    <!-- FOOTER -->
    <footer class="container mt-5 mb-5 ">
      <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
      <p>&copy; 2017 code-pencil</p>
    </footer>

  </main>



  <script src="dist/js/compiled.min.js"></script>
</body>

</html>