<?php
    require('../module/db_config/db.php');
    session_start();
    if($_SERVER['REQUEST_URI'] != ""){
            
            preg_match("([^?]+$)", $_SERVER['REQUEST_URI'],$matches);
            $getID = $matches[0];
            
            $sql = "SELECT DISTINCT (CodeID) CodeID ,HTMLCode FROM codefile where CodeID = '".$getID."' and HTMLCode !=''";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
          
              // If result matched $myusername and $mypassword, table row must be 1 row
          
            if($count == 1) 
            {
                $sql = "SELECT DISTINCT (CodeID) CodeID,CodeFileName ,HTMLCode,CSSCode,JavascriptCode FROM codefile where CodeID = '".$getID."'";
                $result = $conn->query($sql);
               
            }
            else
            {
              $_SESSION['Req_URI_ID'] = $getID;
            }
    }else{
        header("location: ../index.php");
    }
    
?>
