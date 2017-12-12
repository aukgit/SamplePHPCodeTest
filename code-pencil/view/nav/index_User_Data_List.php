<?php
       
      if(isset($_SESSION["UserID"]) === true){
        if ($result->num_rows > 0) 
        {
            echo '<div class="card">
                    <div class="card-body">
                        <div class="container marketing"> 
                            <div class="row"> ';
            while($row = $result->fetch_assoc()) 
            {
                // echo    '<tr>';
                // echo    '<td>'.$row["CodeID"].'</td>';
                // echo    '<td>'.$row["CodeFileName"].'</td>';
                // echo    '<td><a class="btn btn-primary" href="displayCode.php?id='.$row["CodeID"].'" role="button">View Code</a></td>';
                // echo    '<td><a class="btn btn-primary" href="../api/DeleteFromDB.php?del='.$row["CodeID"].'" role="button">Delete Code</a></td>';
                // echo    '</tr>';
                if($row["CodeFileName"] === ""){
                    $row["CodeFileName"] = "Untitle";
                }

                    echo  ' 
                                    <div class="col-lg-4">
                                        <h2 class="card-title">'.$row["CodeFileName"].'</h2>
                                        <p class="card-text">CodeID :'.$row["CodeID"].' </p>
                                        <p><a class="btn btn-primary"  href="view/display_Code.php?id='.$row["CodeID"].'" role="button">View Code</a></p>
                                    </div>   
                                   ';
            
            }
            echo '  </div>
                        </div>
                            </div>
                                </div>';
        } 
        else 
        {
    
            echo    '<p class="ml-5">No Result Found<p>';
    
        }
        
        $conn->close();
    }
    

?>