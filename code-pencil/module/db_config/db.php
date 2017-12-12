<?php
    date_default_timezone_set("Asia/Dhaka");

  
        $servernameLocal = "localhost";
        $usernameLocal = "root";
        $passwordLocal = "";
        $dbnameLocal = "code_pencilDB";

        $conn = new mysqli($servernameLocal, $usernameLocal, $passwordLocal, $dbnameLocal); 
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo '<script>alert("Database Connection Error")</script>';
        }else{
            return $conn;
        }
        


    // GUID Generate
    function guid(){
      
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(5);// "-"
        $uuid = substr($charid, 0, 2)
                .substr($charid, 0, 2)
                .substr($charid, 8, 4);
                
        //print_r($uuid);
        return $uuid;
    }

    function sessionCreate($defination,$WhatYouDefine){
        
        if(session_start()){
                //printf("session already started");
            }else{
                session_start();
            }
       
        $_SESSION[$defination] = $WhatYouDefine;
       
    }



?>