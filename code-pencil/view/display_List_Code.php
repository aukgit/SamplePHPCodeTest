<?php

    include('../api/get_Code_List.php');

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


            </ul>
          </form>
        </div>
      </nav>
    </header>

    <br>
    <br>
    <div class="container">
      <h3>Code List</h3>
      <table class="table">
        <thead>
          <tr>

            <th scope="col">Code ID</th>
            <th scope="col">Name</th>
            <th scope="col">View</th>
            <th scope="col">Delete</th>

          </tr>
        </thead>
        <tbody>

          <?php

            if ($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc()) 
              {
                echo    '<tr>';
                echo    '<td>'.$row["CodeID"].'</td>';
                echo    '<td>'.$row["CodeFileName"].'</td>';
                echo    '<td><a class="btn btn-primary" href="display_Code.php?id='.$row["CodeID"].'" role="button">View Code</a></td>';
                echo    '<td><a class="btn btn-primary" href="../api/Delete_From_DB.php?del='.$row["CodeID"].'" role="button">Delete Code</a></td>';
                echo    '</tr>';
              }
            } 
            else 
            {
              echo    '<tr>';
              echo    '<td>No Result Found</td>';
              echo    '</tr>';
            }
            
            $conn->close();
            
          ?>

        </tbody>
      </table>

    </div>
    <!-- /container -->
  </body>

</html>