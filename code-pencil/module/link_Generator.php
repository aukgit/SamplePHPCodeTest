<?php

    date_default_timezone_set("Asia/Dhaka");
    include('db_config/sqlLogic.php');
  
	
    session_start();
 


    $time = date("his");
    $date = date("md");
    $storeID = guid();
    $CreateDate = date("d.m.y");
    $CreatedTime = date("H:i:s");

    if(isset($_SESSION["UserID"]) != ""){
        $userid = $_SESSION["UserID"];
    }else{
        $userid = "guest";
    }
   

    if(linkgenerator($storeID, $userid, $CreateDate, $CreatedTime)){
        
        echo'<script> window.location="../view/editor.php?'.$storeID.'"; </script> ';
    
    }else{
        echo "<script>alert('Your Login Name or Password is invalid')</script>";
        echo "Error";
    }
  
?>


