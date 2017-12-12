<?php
    if ($result->num_rows > 0) 
    {

        while($row = $result->fetch_assoc()) 
        {
            $viewfileName = $row["CodeFileName"];
            $viewHTML =   htmlspecialchars_decode($row["HTMLCode"]);
            $viewCSS  =   htmlspecialchars_decode($row["CSSCode"]);
            $viewJS   =   htmlspecialchars_decode($row["JavascriptCode"]);
        }
    } 
    else 
    {
       // echo "0 results";
    }
    
    $conn->close();
?> 