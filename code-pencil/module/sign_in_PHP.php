<?php
    // This request came from view/signInPage.php

    date_default_timezone_set("Asia/Dhaka");
    include('db_config/db.php');
    session_start();
   
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // username and password sent from form 
        $myemail = mysqli_real_escape_string($conn,$_POST["email"]); 
        $mypassword = mysqli_real_escape_string($conn,$_POST["password"]); 
        $SHApass = sha1($mypassword);
        
        // Need Check
        //echo "<script> alert('$myemail')</script>";
        //echo "<script> alert('$mypassword')</script>";
        
        $sql = 'SELECT * FROM user WHERE email = "'.$myemail.'" and Password = "'.$SHApass.'"';
        
        $result = mysqli_query($conn,$sql);
        
        if($result)
        {
         
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            
            // If result matched $myusername and $mypassword, table row must be 1 row
        
            if($count == 1) 
            {
                $WhatYouDefine = $row["UserID"];
                $name = $row["UserName"];
               
                
                sessionCreate("UserID",$WhatYouDefine);
                sessionCreate("username",$name);
                header("location: ../index.php");
                echo "true";
                
            }else {
                echo "<script>alert('Your Login Name or Password is invalid')</script>";
                sessionCreate("NotLogin","userNotFound");
                
                header("location: ../view/sign_In_Page.php");
                echo "Error";
                //echo "false";
            }
        }else {
            echo "<script>alert('Your Login Name or Password is invalid');</script>";
            //echo "false";
            sessionCreate("NotLogin","userNotFound");
            
            header("location: ../view/sign_In_Page.php");
            echo "Error";
        }
    }
    $conn->close();
   
  
?>


