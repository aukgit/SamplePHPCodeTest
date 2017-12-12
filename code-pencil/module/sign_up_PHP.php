<?php

  date_default_timezone_set("Asia/Dhaka");
  include('db_config/db.php');
  
	
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST["username"]);
      $mypassword = mysqli_real_escape_string($conn,$_POST["password"]); 
      $myemail = mysqli_real_escape_string($conn,$_POST["email"]); 
      
      // Sha1 generator
      $SHApass = sha1($mypassword);
      $userID = guid()."".$myusername;

      $sql = "INSERT INTO user (UserID, UserName, email, Password) VALUES ('$userID','$myusername','$myemail', '$SHApass')";
      
      if (mysqli_query($conn,$sql) === TRUE) {
          // All Process Done Now Enter address
          sessionCreate("username",$myusername);
          sessionCreate("UserID",$userID);
          header("location: ../index.php");
      }else{
            //$error = "Your Login Name or Password is invalid";
            echo "<script>alert('Your Login Name or Password is invalid')</script>";
            echo "Error";
          }

   }


  
?>


